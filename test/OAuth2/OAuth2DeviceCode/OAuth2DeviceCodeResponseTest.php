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
}
