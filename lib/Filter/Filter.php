<?php

namespace FattureInCloud\Filter;

use Exception;

class Filter
{
    private $expression;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
            call_user_func_array([$this, $function], $arguments);
        }
    }

    public function __construct0()
    {
        $this->expression = new EmptyCondition();
    }

    public function __construct1(Expression $expression)
    {
        $this->expression = $expression;
    }

    /**
     * @return Expression
     */
    public function getExpression(): Expression
    {
        if (is_null($this->expression)) {
            return new EmptyCondition();
        }
        return $this->expression;
    }

    /**
     * @param Expression $expression
     */
    public function setExpression(Expression $expression): void
    {
        $this->expression = $expression;
    }

    /**
     * @param string $field
     * @param string $op
     * @param $value
     * @return Filter
     */
    public function where(string $field, string $op, $value): Filter
    {
        $this->expression = new Condition($field, $op, $value);
        return $this;
    }

    /**
     * @param Expression $expression
     * @return Filter
     */
    public function whereExpression(Expression $expression): Filter
    {
        if ($expression instanceof EmptyCondition) {
            throw new Exception('Cannot initialize the filter with an empty expression.');
        }
        $this->setExpression($expression);
        return $this;
    }

    /**
     * @param string $field
     * @param string $op
     * @param $value
     * @return Filter
     */
    public function and(string $field, string $op, $value): Filter
    {
        if ($this->expression instanceof EmptyCondition) {
            throw new Exception('Cannot create a conjunction for an empty expression.');
        }

        $left = $this->expression;
        $right = new Condition($field, $op, $value);
        $this->expression = new Conjunction($left, $right);
        return $this;
    }

    /**
     * @param Expression $expression
     * @return Filter
     */
    public function andExpression(Expression $expression): Filter
    {
        if (($this->expression instanceof EmptyCondition) or ($expression instanceof EmptyCondition)) {
            throw new Exception('Cannot create a conjunction for an empty expression.');
        }

        $left = $this->expression;
        $this->expression = new Conjunction($left, $expression);
        return $this;
    }

    /**
     * @param Filter $filter
     * @return Filter
     */
    public function andFilter(Filter $filter): Filter
    {
        $expression = $filter->getExpression();

        if (($this->expression instanceof EmptyCondition) or ($expression instanceof EmptyCondition)) {
            throw new Exception('Cannot create a conjunction for an empty expression.');
        }

        $left = $this->expression;
        $this->expression = new Conjunction($left, $expression);
        return $this;
    }

    /**
     * @param string $field
     * @param string $op
     * @param $value
     * @return Filter
     */
    public function or(string $field, string $op, $value): Filter
    {
        if ($this->expression instanceof EmptyCondition) {
            throw new Exception('Cannot create a disjunction for an empty expression.');
        }

        $left = $this->expression;
        $right = new Condition($field, $op, $value);
        $this->expression = new Disjunction($left, $right);
        return $this;
    }

    /**
     * @param Expression $expression
     * @return Filter
     */
    public function orExpression(Expression $expression): Filter
    {
        if (($this->expression instanceof EmptyCondition) or ($expression instanceof EmptyCondition)) {
            throw new Exception('Cannot create a disjunction for an empty expression.');
        }

        $left = $this->expression;
        $this->expression = new Disjunction($left, $expression);
        return $this;
    }

    /**
     * @param Filter $filter
     * @return Filter
     */
    public function orFilter(Filter $filter): Filter
    {
        $expression = $filter->getExpression();

        if (($this->expression instanceof EmptyCondition) or ($expression instanceof EmptyCondition)) {
            throw new Exception('Cannot create a disjunction for an empty expression.');
        }

        $left = $this->expression;
        $this->expression = new Disjunction($left, $expression);
        return $this;
    }

    /**
     * @return string
     */
    public function buildQuery(): string
    {
        return $this->expression->buildQuery();
    }

    /**
     * @return string
     */
    public function buildUrlEncodedQuery(): string
    {
        return urlencode($this->buildQuery());
    }

    public function __toString()
    {
        return $this->buildQuery();
    }
}
