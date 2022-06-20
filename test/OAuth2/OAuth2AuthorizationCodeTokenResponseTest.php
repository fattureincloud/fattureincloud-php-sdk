<?php

namespace FattureInCloud\Test\OAuth2;

use FattureInCloud\OAuth2\OAuth2AuthorizationCodeTokenResponse;
use PHPUnit\Framework\TestCase;

class OAuth2AuthorizationCodeTokenResponseTest extends TestCase
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
        $e = new OAuth2AuthorizationCodeTokenResponse('bearer', 'a/ACCESS', 'r/REFRESH', 86400);
        $this->assertEquals("{\"token_type\":\"bearer\",\"access_token\":\"a\/ACCESS\",\"refresh_token\":\"r\/REFRESH\",\"expires_in\":86400}", $e->toJson());
    }

    /**
     * Test fromJson
     */
    public function testFromJson()
    {
        $e = OAuth2AuthorizationCodeTokenResponse::fromJson("{\"token_type\":\"bearer\",\"access_token\":\"a\/ACCESS\",\"refresh_token\":\"r\/REFRESH\",\"expires_in\":86400}");
        $this->assertEquals('bearer', $e->getTokenType());
        $this->assertEquals('a/ACCESS', $e->getAccessToken());
        $this->assertEquals('r/REFRESH', $e->getRefreshToken());
        $this->assertEquals(86400, $e->getExpiresIn());
    }
}
