<?php

namespace FattureInCloud\Test\Filter;

use PHPUnit\Framework\TestCase;
use FattureInCloud\Filter\EmptyCondition;

class EmptyConditionTest extends TestCase
{
    /**
     * Setup before running any test casos
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
     * Test buildQuery
     */
    public function testBuildQuery()
    {
        $emptyCondition = new EmptyCondition();
        $this->assertEquals('', $emptyCondition->buildQuery());
    }

    /**
     * Test toString
     */
    public function testToString()
    {
        $emptyCondition = new EmptyCondition();
        $this->assertEquals('', (string)$emptyCondition);
    }

    /**
     * Test equals
     */
    public function testEquals()
    {
        $emptyCondition1 = new EmptyCondition();
        $emptyCondition2 = new EmptyCondition();
        
        $this->assertEquals($emptyCondition1, $emptyCondition2);
    }
}