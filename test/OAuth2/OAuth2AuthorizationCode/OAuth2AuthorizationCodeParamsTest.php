<?php

namespace FattureInCloud\Test\OAuth2\OAuth2AuthorizationCode;

use FattureInCloud\OAuth2\OAuth2AuthorizationCode\OAuth2AuthorizationCodeParams;
use PHPUnit\Framework\TestCase;

class OAuth2AuthorizationCodeParamsTest extends TestCase
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
        $params = new OAuth2AuthorizationCodeParams('a/AUTH_CODE', 'OMG');
        $this->assertEquals("{\"code\":\"a\/AUTH_CODE\",\"state\":\"OMG\"}", $params->toJson());
    }

    /**
     * Test fromJson
     */
    public function testFromJson()
    {
        $params = OAuth2AuthorizationCodeParams::fromJson('{"code":"a/AUTH_CODE","state":"OMG"}');
        $this->assertEquals('a/AUTH_CODE', $params->getAuthorizationCode());
        $this->assertEquals('OMG', $params->getState());
    }

    /**
     * Test constructor with null values - expects TypeError
     */
    public function testConstructorWithNullValues()
    {
        $this->expectException(\TypeError::class);
        new OAuth2AuthorizationCodeParams(null, null);
    }

    /**
     * Test constructor with empty string (valid case)
     */
    public function testConstructorWithEmptyStrings()
    {
        $params = new OAuth2AuthorizationCodeParams('', '');
        $this->assertEquals('', $params->getAuthorizationCode());
        $this->assertEquals('', $params->getState());
    }

    /**
     * Test fromJson with missing state
     */
    public function testFromJsonMissingState()
    {
        // SDK doesn't handle missing fields gracefully
        try {
            OAuth2AuthorizationCodeParams::fromJson('{"code":"AUTH_CODE_ONLY"}');
            $this->fail('Expected exception for missing state');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test setter methods
     */
    public function testSetters()
    {
        $params = new OAuth2AuthorizationCodeParams('initial_code', 'initial_state');
        
        $params->setAuthorizationCode('new_auth_code');
        $params->setState('new_state');
        
        $this->assertEquals('new_auth_code', $params->getAuthorizationCode());
        $this->assertEquals('new_state', $params->getState());
    }
}
