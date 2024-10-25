<?php

namespace FattureInCloud\Test\OAuth2\OAuth2DeviceCode;

use FattureInCloud\OAuth2\OAuth2DeviceCode\OAuth2DeviceCodeManager;
use FattureInCloud\OAuth2\OAuth2DeviceCode\OAuth2DeviceCodeResponse;
use FattureInCloud\OAuth2\OAuth2TokenResponse;
use FattureInCloud\OAuth2\Scope;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class OAuth2DeviceCodeManagerTest extends TestCase
{
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test OAuth2DeviceCodeManager
     */
    public function testOAuth2DeviceCodeManager()
    {
        $e = new OAuth2DeviceCodeManager('CLIENT_ID');
        $this->assertEquals('CLIENT_ID', $e->getClientId());
        $this->assertEquals('https://api-v2.fattureincloud.it', $e->getBaseUri());

        $e->setClientId('CLIENT_ID_2');
        $e->setBaseUri('https://api-v2.fattureincloud.it/2');
        $this->assertEquals('CLIENT_ID_2', $e->getClientId());
        $this->assertEquals('https://api-v2.fattureincloud.it/2', $e->getBaseUri());
    }

    /**
     * Test OAuth2DeviceCodeResponse
     */
    public function testOAuth2DeviceCodeResponse()
    {
        $scope = [
            'situation' => 'r',
            'settings' => 'a',
        ];
        $params = new OAuth2DeviceCodeResponse('d/DEVICE_CODE', 'OMG', $scope, 'https://fattureincloud.it/connetti', 5, 300);
        ;
        $this->assertEquals('d/DEVICE_CODE', $params->getDeviceCode());
        $this->assertEquals('OMG', $params->getUserCode());
        $this->assertEquals($scope, $params->getScope());
        $this->assertEquals('https://fattureincloud.it/connetti', $params->getVerificationUri());
        $this->assertEquals(5, $params->getInterval());
        $this->assertEquals(300, $params->getExpiresIn());

        $scope2 = [
            'issued_documents.invoices' => 'r',
            'entity.suppliers' => 'a',
            'stock' => 'r',
        ];
        $params->setDeviceCode('d/DEVICE_CODE_2');
        $params->setUserCode('OMG2');
        $params->setScope($scope2);
        $params->setVerificationUri('https://fattureincloud.it/xxx');
        $params->setInterval(2);
        $params->setExpiresIn(22);
        $this->assertEquals('d/DEVICE_CODE_2', $params->getDeviceCode());
        $this->assertEquals('OMG2', $params->getUserCode());
        $this->assertEquals($scope2, $params->getScope());
        $this->assertEquals('https://fattureincloud.it/xxx', $params->getVerificationUri());
        $this->assertEquals(2, $params->getInterval());
        $this->assertEquals(22, $params->getExpiresIn());
    }

    /**
     * Test OAuth2TokenResponse
     */
    public function testOAuth2TokenResponse()
    {
        $params = new OAuth2TokenResponse('bearer', 'EXAMPLE_ACCESS_TOKEN', 'EXAMPLE_REFRESH_TOKEN', 86400);
        $this->assertEquals('bearer', $params->getTokenType());
        $this->assertEquals('EXAMPLE_ACCESS_TOKEN', $params->getAccessToken());
        $this->assertEquals('EXAMPLE_REFRESH_TOKEN', $params->getRefreshToken());
        $this->assertEquals(86400, $params->getExpiresIn());

        $params->setTokenType('basic');
        $params->setAccessToken('EXAMPLE_ACCESS_TOKEN_2');
        $params->setRefreshToken('EXAMPLE_REFRESH_TOKEN_2');
        $params->setExpiresIn(7200);
        $this->assertEquals('basic', $params->getTokenType());
        $this->assertEquals('EXAMPLE_ACCESS_TOKEN_2', $params->getAccessToken());
        $this->assertEquals('EXAMPLE_REFRESH_TOKEN_2', $params->getRefreshToken());
        $this->assertEquals(7200, $params->getExpiresIn());
    }

    /**
     * Test fetchToken
     */
    public function testGetDeviceCode()
    {
        $stream = '{"data":{"device_code":"d/DEVICE_CODE","user_code":"OMG","scope":{"situation":"r","settings":"a"},"verification_uri":"https://fattureincloud.it/connetti","interval":5,"expires_in":300}}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $customClient = new Client(['handler' => $handler]);

        $e = new OAuth2DeviceCodeManager('CLIENT_ID', 'http://fic.api.test', $customClient);
        $scopes = [Scope::SITUATION_READ, Scope::SETTINGS_ALL];
        $res = $e->getDeviceCode($scopes);
        $this->assertEquals('d/DEVICE_CODE', $res->getDeviceCode());
        $this->assertEquals('OMG', $res->getUserCode());
        $scope = [
            'situation' => 'r',
            'settings' => 'a',
        ];
        $this->assertEquals($scope, $res->getScope());
        $this->assertEquals('https://fattureincloud.it/connetti', $res->getVerificationUri());
        $this->assertEquals(5, $res->getInterval());
        $this->assertEquals(300, $res->getExpiresIn());
    }

    /**
     * Test fetchToken
     */
    public function testFetchToken()
    {
        $stream = '{"token_type": "bearer", "access_token": "a/ACCESS_TOKEN", "refresh_token": "r/REFRESH_TOKEN", "expires_in": 86400}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $customClient = new Client(['handler' => $handler]);

        $e = new OAuth2DeviceCodeManager('CLIENT_ID', 'http://fic.api.test', $customClient);
        $token = $e->fetchToken('test_code');
        $this->assertEquals('bearer', $token->getTokenType());
        $this->assertEquals('a/ACCESS_TOKEN', $token->getAccessToken());
        $this->assertEquals('r/REFRESH_TOKEN', $token->getRefreshToken());
        $this->assertEquals(86400, $token->getExpiresIn());
    }

    /**
     * Test refreshToken
     */
    public function testRefreshToken()
    {
        $stream = '{"token_type": "bearer", "access_token": "a/ACCESS_TOKEN", "refresh_token": "r/REFRESH_TOKEN", "expires_in": 86400}';
        $mock = new MockHandler([new Response(
            200,
            ['Content-Type' => 'application/json'],
            $stream
        )]);

        $handler = HandlerStack::create($mock);
        $customClient = new Client(['handler' => $handler]);

        $e = new OAuth2DeviceCodeManager('CLIENT_ID', 'http://fic.api.test', $customClient);
        $token = $e->refreshToken('refresh_token');
        $this->assertEquals('bearer', $token->getTokenType());
        $this->assertEquals('a/ACCESS_TOKEN', $token->getAccessToken());
        $this->assertEquals('r/REFRESH_TOKEN', $token->getRefreshToken());
        $this->assertEquals(86400, $token->getExpiresIn());
    }
}
