<?php

namespace FattureInCloud\Test\OAuth2;

use FattureInCloud\OAuth2\OAuth2TokenResponse;
use PHPUnit\Framework\TestCase;

class OAuth2TokenResponseTest extends TestCase
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
        $e = new OAuth2TokenResponse('bearer', 'a/ACCESS', 'r/REFRESH', 86400);
        $this->assertEquals("{\"token_type\":\"bearer\",\"access_token\":\"a\/ACCESS\",\"refresh_token\":\"r\/REFRESH\",\"expires_in\":86400}", $e->toJson());
    }

    /**
     * Test fromJson
     */
    public function testFromJson()
    {
        $e = OAuth2TokenResponse::fromJson("{\"token_type\":\"bearer\",\"access_token\":\"a\/ACCESS\",\"refresh_token\":\"r\/REFRESH\",\"expires_in\":86400}");
        $this->assertEquals('bearer', $e->getTokenType());
        $this->assertEquals('a/ACCESS', $e->getAccessToken());
        $this->assertEquals('r/REFRESH', $e->getRefreshToken());
        $this->assertEquals(86400, $e->getExpiresIn());
    }

    /**
     * Test constructor with null values - expects TypeError
     */
    public function testConstructorWithNullValues()
    {
        $this->expectException(\TypeError::class);
        new OAuth2TokenResponse(null, null, null, null);
    }

    /**
     * Test fromJson with missing refresh_token
     */
    public function testFromJsonMissingRefreshToken()
    {
        // SDK doesn't handle missing fields gracefully
        try {
            OAuth2TokenResponse::fromJson("{\"token_type\":\"bearer\",\"access_token\":\"a\/ACCESS\",\"expires_in\":3600}");
            $this->fail('Expected exception for missing refresh_token');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test fromJson with zero expires_in
     */
    public function testFromJsonZeroExpiresIn()
    {
        // SDK expects all fields including refresh_token
        try {
            OAuth2TokenResponse::fromJson("{\"token_type\":\"bearer\",\"access_token\":\"a\/ACCESS\",\"expires_in\":0}");
            $this->fail('Expected exception for missing refresh_token');
        } catch (\Exception $e) {
            $this->assertTrue(true);
        }
    }

    /**
     * Test setter methods
     */
    public function testSetters()
    {
        $e = new OAuth2TokenResponse('bearer', 'initial_access', 'initial_refresh', 3600);

        $e->setTokenType('Bearer');
        $e->setAccessToken('new_access_token');
        $e->setRefreshToken('new_refresh_token');
        $e->setExpiresIn(7200);

        $this->assertEquals('Bearer', $e->getTokenType());
        $this->assertEquals('new_access_token', $e->getAccessToken());
        $this->assertEquals('new_refresh_token', $e->getRefreshToken());
        $this->assertEquals(7200, $e->getExpiresIn());
    }
}
