<?php

namespace FattureInCloud\Test\Filter;

use FattureInCloud\Filter\Condition;
use FattureInCloud\Filter\Conjunction;
use FattureInCloud\Filter\Disjunction;
use FattureInCloud\Filter\EmptyCondition;
use FattureInCloud\Filter\Filter;
use FattureInCloud\Filter\Operator;
use PHPUnit\Framework\TestCase;
use Exception;

class FilterTest extends TestCase
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
     * Test expression
     */
    public function testExpression()
    {
        $filter = new Filter();
        $this->assertEquals(new EmptyCondition(), $filter->getExpression());

        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter($condition);
        $this->assertEquals($condition, $filter->getExpression());

        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $filter->setExpression($condition2);
        $this->assertEquals($condition2, $filter->getExpression());
    }

    /**
     * Test where
     */
    public function testWhere()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter();
        $filter->where('city', Operator::EQ, 'Bergamo');
        $this->assertEquals($condition, $filter->getExpression());

        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $filter->where('vacation', Operator::EQ, 'Martinica');
        $this->assertEquals($condition2, $filter->getExpression());
    }

    /**
     * Test whereExpression
     */
    public function testWhereExpression()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter();
        $filter->whereExpression($condition);
        $this->assertEquals($condition, $filter->getExpression());

        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $filter->whereExpression($condition2);
        $this->assertEquals($condition2, $filter->getExpression());
    }

    /**
     * Test empty whereExpression
     */
    public function testEmptyWhereExpression()
    {
        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->whereExpression(new EmptyCondition());
    }

    /**
     * Test and
     */
    public function testAnd()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $conjunction = new Conjunction($condition, $condition2);

        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->and('vacation', Operator::EQ, 'Martinica');

        $filter->where('city', Operator::EQ, 'Bergamo')
            ->and('vacation', Operator::EQ, 'Martinica');
        $this->assertEquals($conjunction, $filter->getExpression());
    }

    /**
     * Test andExpression
     */
    public function testAndExpression()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $conjunction = new Conjunction($condition, $condition2);

        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->andExpression($condition2);

        $filter->whereExpression($condition)
            ->andExpression($condition2);
        $this->assertEquals($conjunction, $filter->getExpression());
    }

    /**
     * Test empty andExpression
     */
    public function testEmptyAndExpression()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->whereExpression($condition)
            ->andExpression(new EmptyCondition());
    }

    /**
     * Test andFilter
     */
    public function testAndFilter()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $conjunction = new Conjunction($condition, $condition2);

        $emptyFilter = new Filter();
        $filter1 = new Filter('city', Operator::EQ, 'Bergamo');
        $filter2 = new Filter('vacation', Operator::EQ, 'Martinica');

        $this->expectException(Exception::class);
        $emptyFilter->andFilter($filter2);
        $filter1->andFilter($emptyFilter);

        $filter1->andFilter($filter2);
        $this->assertEquals($conjunction, $filter1->getExpression());
    }

    /**
     * Test empty andFilter
     */
    public function testEmptyAndFilter()
    {
        $filter1 = new Filter('city', Operator::EQ, 'Bergamo');
        $filter = new Filter(new EmptyCondition());
        $this->expectException(Exception::class);
        $filter1->andFilter($filter);
    }

    /**
     * Test or
     */
    public function testOr()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $disjunction = new Disjunction($condition, $condition2);

        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->or('vacation', Operator::EQ, 'Martinica');

        $filter->where('city', Operator::EQ, 'Bergamo')
            ->or('vacation', Operator::EQ, 'Martinica');
        $this->assertEquals($disjunction, $filter->getExpression());
    }

    /**
     * Test orExpression
     */
    public function testOrExpression()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $disjunction = new Disjunction($condition, $condition2);

        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->orExpression($condition2);

        $filter->whereExpression($condition)
            ->orExpression($condition2);
        $this->assertEquals($disjunction, $filter->getExpression());
    }

    /**
     * Test empty orExpression
     */
    public function testEmptyOrExpression()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter();
        $this->expectException(Exception::class);
        $filter->whereExpression($condition)
            ->orExpression(new EmptyCondition());
    }

    /**
     * Test orFilter
     */
    public function testOrFilter()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $condition2 = new Condition('vacation', Operator::EQ, 'Martinica');
        $disjunction = new Disjunction($condition, $condition2);

        $emptyFilter = new Filter();
        $filter1 = new Filter('city', Operator::EQ, 'Bergamo');
        $filter2 = new Filter('vacation', Operator::EQ, 'Martinica');

        $this->expectException(Exception::class);
        $emptyFilter->orFilter($filter2);
        $filter1->orFilter($emptyFilter);

        $filter1->orFilter($filter2);
        $this->assertEquals($disjunction, $filter1->getExpression());
    }

    /**
     * Test empty orFilter
     */
    public function testEmptyOrFilter()
    {
        $filter1 = new Filter('city', Operator::EQ, 'Bergamo');
        $filter = new Filter(new EmptyCondition());
        $this->expectException(Exception::class);
        $filter1->orFilter($filter);
    }

    /**
     * Test buildQuery
     */
    public function testBuildQuery()
    {
        $filter = new Filter();
        $this->assertEquals('', $filter->buildQuery());

        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter($condition);
        $this->assertEquals("city = 'Bergamo'", $filter->buildQuery());
    }

    /**
     * Test buildUrlEncodedQuery
     */
    public function testBuildUrlEncodedQuery()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter($condition);
        $this->assertEquals('city+%3D+%27Bergamo%27', $filter->buildUrlEncodedQuery());
    }

    /**
     * Test toString
     */
    public function testToString()
    {
        $condition = new Condition('city', Operator::EQ, 'Bergamo');
        $filter = new Filter($condition);
        $this->assertEquals("city = 'Bergamo'", (string)$filter);
    }

    /**
     * Test complex chaining with mixed operators
     */
    public function testComplexChaining()
    {
        $filter = new Filter();
        $filter->where('city', Operator::EQ, 'Milano')
               ->and('age', Operator::GT, 18)
               ->or('status', Operator::EQ, 'premium');
        
        $expected = "((city = 'Milano' and age > 18) or status = 'premium')";
        $this->assertEquals($expected, $filter->buildQuery());
    }

    /**
     * Test realistic invoice filtering
     */
    public function testInvoiceFiltering()
    {
        $filter = new Filter();
        $filter->where('type', Operator::EQ, 'invoice')
               ->and('amount', Operator::GTE, 100)
               ->and('date', Operator::GTE, '2024-01-01')
               ->or('status', Operator::EQ, 'paid');
        
        $expected = "(((type = 'invoice' and amount >= 100) and date >= '2024-01-01') or status = 'paid')";
        $this->assertEquals($expected, $filter->buildQuery());
    }

    /**
     * Test client search filtering with patterns
     */
    public function testClientSearchFiltering()
    {
        $filter = new Filter();
        $filter->where('name', Operator::CONTAINS, 'SRL')
               ->or('name', Operator::STARTS_WITH, 'Studio')
               ->or('email', Operator::ENDS_WITH, '.edu');
        
        $expected = "((name contains 'SRL' or name starts with 'Studio') or email ends with '.edu')";
        $this->assertEquals($expected, $filter->buildQuery());
    }

    /**
     * Test filter with null checks
     */
    public function testFilterWithNullChecks()
    {
        $filter = new Filter();
        $filter->where('deleted_at', Operator::IS, null)
               ->and('notes', Operator::IS_NOT, null);
        
        $expected = "(deleted_at is null and notes is not null)";
        $this->assertEquals($expected, $filter->buildQuery());
    }

    /**
     * Test mixed data types
     */
    public function testMixedDataTypes()
    {
        $filter = new Filter();
        $filter->where('active', Operator::EQ, true)
               ->and('priority', Operator::LTE, 5)
               ->and('score', Operator::GT, 85.5);
        
        $expected = "((active = 1 and priority <= 5) and score > 85.5)";
        $this->assertEquals($expected, $filter->buildQuery());
    }
}
