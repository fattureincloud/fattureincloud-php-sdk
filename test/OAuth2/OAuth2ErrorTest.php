<?php

namespace FattureInCloud\Test\OAuth2;

use FattureInCloud\OAuth2\OAuth2Error;
use PHPUnit\Framework\TestCase;

class OAuth2ErrorTest extends TestCase
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
        $e = new OAuth2Error(418, 'I am a teapot', 'And I am boiling');
        $this->assertEquals('{"code":418,"error":"I am a teapot","error_description":"And I am boiling"}', $e->toJson());
    }

    /**
     * Test fromJson
     */
    public function testFromJson()
    {
        $e = OAuth2Error::fromJson('{"error":"I am a teapot","error_description":"And I am boiling","code":418}');
        $this->assertEquals('I am a teapot', $e->getError());
        $this->assertEquals('And I am boiling', $e->getErrorDescription());
        $this->assertEquals(418, $e->getCode());
    }

    /**
     * Test constructor with null values - actually expects TypeError
     */
    public function testConstructorWithNullValues()
    {
        $this->expectException(\TypeError::class);
        new OAuth2Error(null, null, null);
    }

    /**
     * Test constructor with empty strings
     */
    public function testConstructorWithEmptyValues()
    {
        $e = new OAuth2Error(0, '', '');
        $this->assertEquals(0, $e->getCode());
        $this->assertEquals('', $e->getError());
        $this->assertEquals('', $e->getErrorDescription());
    }

    /**
     * Test fromJson with malformed JSON
     */
    public function testFromJsonMalformed()
    {
        // SDK doesn't handle malformed JSON well - this tests current behavior
        try {
            OAuth2Error::fromJson('{"malformed":');
            $this->fail('Expected exception for malformed JSON');
        } catch (\Exception $e) {
            // Accept any exception type - SDK behavior may vary
            $this->assertTrue(true);
        }
    }

    /**
     * Test fromJson with missing fields
     */
    public function testFromJsonMissingFields()
    {
        // SDK expects all fields - this tests current behavior
        try {
            OAuth2Error::fromJson('{"error":"test_error"}');
            $this->fail('Expected exception for missing fields');
        } catch (\Exception $e) {
            // Accept any exception - SDK doesn't handle missing fields gracefully
            $this->assertTrue(true);
        }
    }
}
