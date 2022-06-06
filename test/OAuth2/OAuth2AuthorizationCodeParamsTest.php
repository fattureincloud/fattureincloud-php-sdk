<?php

namespace FattureInCloud\Test\OAuth2;

use FattureInCloud\OAuth2\OAuth2AuthorizationCodeParams;
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
}
