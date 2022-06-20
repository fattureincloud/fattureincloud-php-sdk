<?php

namespace FattureInCloud\Test\OAuth2;

use FattureInCloud\OAuth2\OAuth2AuthorizationCodeError;
use PHPUnit\Framework\TestCase;

class OAuth2AuthorizationCodeErrorTest extends TestCase
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
        $e = new OAuth2AuthorizationCodeError(418, 'I am a teapot', 'And I am boiling');
        $this->assertEquals('{"code":418,"error":"I am a teapot","error_description":"And I am boiling"}', $e->toJson());
    }

    /**
     * Test fromJson
     */
    public function testFromJson()
    {
        $e = OAuth2AuthorizationCodeError::fromJson('{"error":"I am a teapot","error_description":"And I am boiling","code":418}');
        $this->assertEquals('I am a teapot', $e->getError());
        $this->assertEquals('And I am boiling', $e->getErrorDescription());
        $this->assertEquals(418, $e->getCode());
    }
}
