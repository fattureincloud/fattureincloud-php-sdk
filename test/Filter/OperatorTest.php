<?php

namespace FattureInCloud\Test\Filter;

use PHPUnit\Framework\TestCase;
use FattureInCloud\Filter\Operator;

class OperatorTest extends TestCase
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
     * Test operator constants - comparison operators
     */
    public function testComparisonOperators()
    {
        $this->assertEquals('=', Operator::EQ);
        $this->assertEquals('>', Operator::GT);
        $this->assertEquals('>=', Operator::GTE);
        $this->assertEquals('<', Operator::LT);
        $this->assertEquals('<=', Operator::LTE);
        $this->assertEquals('<>', Operator::NEQ);
    }

    /**
     * Test operator constants - null check operators
     */
    public function testNullCheckOperators()
    {
        $this->assertEquals('is', Operator::IS);
        $this->assertEquals('is not', Operator::IS_NOT);
    }

    /**
     * Test operator constants - pattern operators
     */
    public function testPatternOperators()
    {
        $this->assertEquals('like', Operator::LIKE);
        $this->assertEquals('not like', Operator::NOT_LIKE);
        $this->assertEquals('contains', Operator::CONTAINS);
        $this->assertEquals('not contains', Operator::NOT_CONTAINS);
        $this->assertEquals('starts with', Operator::STARTS_WITH);
        $this->assertEquals('ends with', Operator::ENDS_WITH);
    }

    /**
     * Test that all operators are defined as constants
     */
    public function testAllOperatorsAreDefined()
    {
        $expectedOperators = [
            'EQ', 'GT', 'GTE', 'LT', 'LTE', 'NEQ',
            'IS', 'IS_NOT', 
            'LIKE', 'NOT_LIKE', 'CONTAINS', 'NOT_CONTAINS', 
            'STARTS_WITH', 'ENDS_WITH'
        ];

        $reflection = new \ReflectionClass(Operator::class);
        $constants = array_keys($reflection->getConstants());

        foreach ($expectedOperators as $expectedOperator) {
            $this->assertContains($expectedOperator, $constants, "Operator constant {$expectedOperator} is missing");
        }
    }
}