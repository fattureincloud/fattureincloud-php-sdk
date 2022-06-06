<?php

namespace FattureInCloud\Filter;

class EmptyCondition implements Expression
{
    /**
     * @return string
     */
    public function buildQuery(): string
    {
        return '';
    }

    public function __toString(): string
    {
        return $this->buildQuery();
    }
}
