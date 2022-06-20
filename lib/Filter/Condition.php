<?php

namespace FattureInCloud\Filter;

class Condition implements Expression
{
    private $field;
    private $op;
    private $value;

    /**
     * @param $field
     * @param $op
     * @param $value
     */
    public function __construct(string $field, string $op, $value)
    {
        $this->field = $field;
        $this->op = $op;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param string $field
     */
    public function setField(string $field): void
    {
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getOp(): string
    {
        return $this->op;
    }

    /**
     * @param string $op
     */
    public function setOp(string $op): void
    {
        $this->op = $op;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function buildQuery(): string
    {
        if (is_null($this->value)) {
            return $this->field . ' ' . $this->op . ' null';
        } else {
            $valueType = gettype($this->value);
            if ($valueType === 'string') {
                return $this->field . ' ' . $this->op . " '" . $this->value . "'";
            }
            return $this->field . ' ' . $this->op . ' ' . $this->value;
        }
    }

    public function __toString(): string
    {
        return $this->buildQuery();
    }
}
