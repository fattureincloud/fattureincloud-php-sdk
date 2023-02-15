<?php

namespace FattureInCloud\Test\Filter;

use PHPUnit\Framework\TestCase;
use \FattureInCloud\Filter\Condition;
use \FattureInCloud\Filter\Operator;

class ConditionTest extends TestCase
{
    public $array = [];
    public $object;

    /**
     * Setup before running any test case
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
     * Test value
     */
    public function testValue()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $this->assertEquals('Bergamo', $condition->getValue());

        $condition->setValue('Rio de Janeiro');
        $this->assertEquals('Rio de Janeiro', $condition->getValue());

        $condition->setValue(5);
        $this->assertEquals(5, (int)$condition->getValue());

        $condition->setValue(5.5);
        $this->assertEquals(5.5, (float)$condition->getValue());

        $condition->setValue(true);
        $this->assertEquals(true, (bool)$condition->getValue());

        $condition->setValue(false);
        $this->assertEquals(false, (bool)$condition->getValue());

        $condition->setValue(null);
        $this->assertEquals(null, $condition->getValue());
    }

    /**
     * Test field
     */
    public function testField()
    {
        $condition = new Condition('name', Operator::EQ, 'Bergamo');
        $this->assertEquals('name', $condition->getField());

        $condition->setField('city');
        $this->assertEquals('city', $condition->getField());
    }

    /**
     * Test operator
     */
    public function testOperator()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $this->assertEquals(Operator::EQ, $condition->getOp());

        $condition->setOp(Operator::GT);
        $this->assertEquals(Operator::GT, $condition->getOp());

        $condition->setOp(Operator::GTE);
        $this->assertEquals(Operator::GTE, $condition->getOp());

        $condition->setOp(Operator::LT);
        $this->assertEquals(Operator::LT, $condition->getOp());

        $condition->setOp(Operator::LTE);
        $this->assertEquals(Operator::LTE, $condition->getOp());

        $condition->setOp(Operator::NEQ);
        $this->assertEquals(Operator::NEQ, $condition->getOp());

        $condition->setOp(Operator::IS);
        $this->assertEquals(Operator::IS, $condition->getOp());

        $condition->setOp(Operator::IS_NOT);
        $this->assertEquals(Operator::IS_NOT, $condition->getOp());

        $condition->setOp(Operator::LIKE);
        $this->assertEquals(Operator::LIKE, $condition->getOp());

        $condition->setOp(Operator::CONTAINS);
        $this->assertEquals(Operator::CONTAINS, $condition->getOp());

        $condition->setOp(Operator::STARTS_WITH);
        $this->assertEquals(Operator::STARTS_WITH, $condition->getOp());

        $condition->setOp(Operator::ENDS_WITH);
        $this->assertEquals(Operator::ENDS_WITH, $condition->getOp());
    }

    /**
     * Test buildQuery
     */
    public function testBuildQuery()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $this->assertEquals("city = 'Bergamo'", $condition->buildQuery());

        $condition = new Condition('city', Operator::NEQ, null);
        $this->assertEquals('city <> null', $condition->buildQuery());

        $condition = new Condition('city', Operator::IS, null);
        $this->assertEquals('city is null', $condition->buildQuery());

        $condition = new Condition('city', Operator::IS_NOT, null);
        $this->assertEquals('city is not null', $condition->buildQuery());

        $condition = new Condition('city', Operator::LIKE, '%aco');
        $this->assertEquals("city like '%aco'", $condition->buildQuery());

        $condition = new Condition('city', Operator::CONTAINS, 'ila');
        $this->assertEquals("city contains 'ila'", $condition->buildQuery());

        $condition = new Condition('city', Operator::STARTS_WITH, 'Mariano');
        $this->assertEquals("city starts with 'Mariano'", $condition->buildQuery());

        $condition = new Condition('city', Operator::ENDS_WITH, 'al Brembo');
        $this->assertEquals("city ends with 'al Brembo'", $condition->buildQuery());

        $condition = new Condition('employees', Operator::GT, 10);
        $this->assertEquals('employees > 10', $condition->buildQuery());

        $condition = new Condition('employees', Operator::LT, 10);
        $this->assertEquals('employees < 10', $condition->buildQuery());

        $condition = new Condition('convertion_ratio', Operator::GTE, 0.01);
        $this->assertEquals('convertion_ratio >= 0.01', $condition->buildQuery());

        $condition = new Condition('convertion_ratio', Operator::LTE, 10.83);
        $this->assertEquals('convertion_ratio <= 10.83', $condition->buildQuery());
    }

    /**
     * Test toString
     */
    public function testToString()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $this->assertEquals("city = 'Bergamo'", (string)$condition);

        $condition = new Condition('city', Operator::NEQ, null);
        $this->assertEquals('city <> null', (string)$condition);

        $condition = new Condition('city', Operator::IS, null);
        $this->assertEquals('city is null', (string)$condition);

        $condition = new Condition('city', Operator::IS_NOT, null);
        $this->assertEquals('city is not null', (string)$condition);

        $condition = new Condition('city', Operator::LIKE, '%aco');
        $this->assertEquals("city like '%aco'", (string)$condition);

        $condition = new Condition('city', Operator::CONTAINS, 'ila');
        $this->assertEquals("city contains 'ila'", (string)$condition);

        $condition = new Condition('city', Operator::STARTS_WITH, 'Mariano');
        $this->assertEquals("city starts with 'Mariano'", (string)$condition);

        $condition = new Condition('city', Operator::ENDS_WITH, 'al Brembo');
        $this->assertEquals("city ends with 'al Brembo'", (string)$condition);

        $condition = new Condition('employees', Operator::GT, 10);
        $this->assertEquals('employees > 10', (string)$condition);

        $condition = new Condition('employees', Operator::LT, 10);
        $this->assertEquals('employees < 10', (string)$condition);

        $condition = new Condition('convertion_ratio', Operator::GTE, 0.01);
        $this->assertEquals('convertion_ratio >= 0.01', (string)$condition);

        $condition = new Condition('convertion_ratio', Operator::LTE, 10.83);
        $this->assertEquals('convertion_ratio <= 10.83', (string)$condition);
    }
}
