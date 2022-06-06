<?php

namespace FattureInCloud\Test\OAuth2;

use FattureInCloud\OAuth2\OAuth2AuthorizationCodeTokenResponse;
use FattureInCloud\OAuth2\OAuth2AuthorizationCodeManager;
use FattureInCloud\OAuth2\OAuth2AuthorizationCodeParams;
use FattureInCloud\OAuth2\Scope;
use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Handler\MockHandler;
use \GuzzleHttp\HandlerStack;
use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Response;

class OAuth2AuthorizationCodeManagerTest extends TestCase
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
     * Test OAuth2AuthorizationCodeManager
     */
    public function testOAuth2AuthorizationCodeManager()
    {
        $e = new OAuth2AuthorizationCodeManager('CLIENT_ID', 'CLIENT_SECRET', 'REDIRECT_URI');
        $this->assertEquals('CLIENT_ID', $e->getClientId());
        $this->assertEquals('CLIENT_SECRET', $e->getClientSecret());
        $this->assertEquals('REDIRECT_URI', $e->getRedirectUri());
        $this->assertEquals('https://api-v2.fattureincloud.it', $e->getBaseUri());

        $e->setClientId('CLIENT_ID_2');
        $e->setClientSecret('CLIENT_SECRET_2');
        $e->setRedirectUri('REDIRECT_URI_2');
        $e->setBaseUri('https://api-v2.fattureincloud.it/2');
        $this->assertEquals('CLIENT_ID_2', $e->getClientId());
        $this->assertEquals('CLIENT_SECRET_2', $e->getClientSecret());
        $this->assertEquals('REDIRECT_URI_2', $e->getRedirectUri());
        $this->assertEquals('https://api-v2.fattureincloud.it/2', $e->getBaseUri());
    }

    /**
     * Test OAuth2AuthorizationCodeParams
     */
    public function testOAuth2AuthorizationCodeParams()
    {
        $params = new OAuth2AuthorizationCodeParams('a/AUTH_CODE', 'OMG');
        $this->assertEquals('a/AUTH_CODE', $params->getAuthorizationCode());
        $this->assertEquals('OMG', $params->getState());

        $params->setAuthorizationCode('a/AUTH_CODE_2');
        $params->setState('OMG2');
        $this->assertEquals('a/AUTH_CODE_2', $params->getAuthorizationCode());
        $this->assertEquals('OMG2', $params->getState());
    }

    /**
     * Test OAuth2AuthorizationCodeTokenResponse
     */
    public function testOAuth2AuthorizationCodeTokenResponse()
    {
        $params = new OAuth2AuthorizationCodeTokenResponse('bearer', 'EXAMPLE_ACCESS_TOKEN', 'EXAMPLE_REFRESH_TOKEN', 86400);
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
     * Test getAuthorizationUrl
     */
    public function testGetAuthorizationUrl()
    {
        $scopes = [Scope::SETTINGS_ALL, Scope::ISSUED_DOCUMENTS_INVOICES_READ];
        $e = new OAuth2AuthorizationCodeManager('CLIENT_ID', 'CLIENT_SECRET', 'http://localhost:3000/redirect');

        $this->assertEquals('https://api-v2.fattureincloud.it/oauth/authorize?response_type=code&client_id=CLIENT_ID&redirect_uri=http%3A%2F%2Flocalhost%3A3000%2Fredirect&scope=settings%3Aa+issued_documents.invoices%3Ar&state=EXAMPLE_STATE', $e->getAuthorizationUrl($scopes, 'EXAMPLE_STATE'));
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

        $e = new OAuth2AuthorizationCodeManager('CLIENT_ID', 'CLIENT_SECRET', 'http://localhost:3000/redirect', 'http://fic.api.test', $customClient);
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

        $e = new OAuth2AuthorizationCodeManager('CLIENT_ID', 'CLIENT_SECRET', 'http://localhost:3000/redirect', 'http://fic.api.test', $customClient);
        $token = $e->refreshToken('refresh_token');
        $this->assertEquals('bearer', $token->getTokenType());
        $this->assertEquals('a/ACCESS_TOKEN', $token->getAccessToken());
        $this->assertEquals('r/REFRESH_TOKEN', $token->getRefreshToken());
        $this->assertEquals(86400, $token->getExpiresIn());
    }
}
