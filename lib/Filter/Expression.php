<?php

namespace FattureInCloud\Filter;

interface Expression
{
    public function buildQuery(): string;

    public function __toString();
}
