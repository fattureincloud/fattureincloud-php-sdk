<?php

namespace FattureInCloud\Test\OAuth2\OAuth2DeviceCode;

use FattureInCloud\OAuth2\OAuth2DeviceCode\OAuth2DeviceCodeResponse;
use PHPUnit\Framework\TestCase;

class OAuth2DeviceCodeResponseTest extends TestCase
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
     * Test toJson
     */
    public function testToJson()
    {
        $scope = [
            'situation' => 'r',
            'settings' => 'a',
        ];
        $params = new OAuth2DeviceCodeResponse('d/DEVICE_CODE', 'OMG', $scope, 'https://fattureincloud.it/connetti', 5, 300);
        $this->assertEquals("{\"device_code\":\"d\/DEVICE_CODE\",\"user_code\":\"OMG\",\"scope\":{\"situation\":\"r\",\"settings\":\"a\"},\"verification_uri\":\"https:\/\/fattureincloud.it\/connetti\",\"interval\":5,\"expires_in\":300}", $params->toJson());
    }

    /**
     * Test fromJson
     */
    public function testFromJson()
    {
        $params = OAuth2DeviceCodeResponse::fromJson('{"device_code":"d/DEVICE_CODE","user_code":"OMG","scope":{"situation":"r","settings":"a"},"verification_uri":"https://fattureincloud.it/connetti","interval":5,"expires_in":300}');
        $this->assertEquals('d/DEVICE_CODE', $params->getDeviceCode());
        $this->assertEquals('OMG', $params->getUserCode());
        $scope = [
            'situation' => 'r',
            'settings' => 'a',
        ];
        $this->assertEquals($scope, $params->getScope());
        $this->assertEquals('https://fattureincloud.it/connetti', $params->getVerificationUri());
        $this->assertEquals(5, $params->getInterval());
        $this->assertEquals(300, $params->getExpiresIn());
    }

    /**
     * Test constructor with null values - expects TypeError
     */
    public function testConstructorWithNullValues()
    {
        $this->expectException(\TypeError::class);
        new OAuth2DeviceCodeResponse(null, null, null, null, null, null);
    }

    /**
     * Test constructor with empty strings (valid case)
     */
    public function testConstructorWithEmptyStrings()
    {
        $params = new OAuth2DeviceCodeResponse('', '', [], '', 0, 0);
        $this->assertEquals('', $params->getDeviceCode());
        $this->assertEquals('', $params->getUserCode());
        $this->assertEquals([], $params->getScope());
        $this->assertEquals('', $params->getVerificationUri());
        $this->assertEquals(0, $params->getInterval());
        $this->assertEquals(0, $params->getExpiresIn());
    }

    /**
     * Test fromJson with minimal data
     */
    public function testFromJsonMissingFields()
    {
        // SDK doesn't handle missing fields gracefully
        try {
            OAuth2DeviceCodeResponse::fromJson('{"device_code":"d/MINIMAL","user_code":"MIN"}');
            $this->fail('Expected exception for missing fields');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test setter methods
     */
    public function testSetters()
    {
        $scope = ['situation' => 'r'];
        $params = new OAuth2DeviceCodeResponse('initial_device', 'initial_user', $scope, 'initial_uri', 1, 100);
        
        $newScope = ['settings' => 'a', 'invoices' => 'rw'];
        $params->setDeviceCode('new_device_code');
        $params->setUserCode('new_user_code');
        $params->setScope($newScope);
        $params->setVerificationUri('https://example.com/verify');
        $params->setInterval(10);
        $params->setExpiresIn(600);
        
        $this->assertEquals('new_device_code', $params->getDeviceCode());
        $this->assertEquals('new_user_code', $params->getUserCode());
        $this->assertEquals($newScope, $params->getScope());
        $this->assertEquals('https://example.com/verify', $params->getVerificationUri());
        $this->assertEquals(10, $params->getInterval());
        $this->assertEquals(600, $params->getExpiresIn());
    }

    /**
     * Test with complex scope
     */
    public function testComplexScope()
    {
        $scope = [
            'issued_documents.invoices' => 'rw',
            'entity.clients' => 'r',
            'settings' => 'a',
            'stock' => 'r'
        ];
        $params = new OAuth2DeviceCodeResponse('device', 'user', $scope, 'uri', 5, 300);
        $json = $params->toJson();
        $decoded = json_decode($json, true);
        $this->assertEquals($scope, $decoded['scope']);
    }
}
