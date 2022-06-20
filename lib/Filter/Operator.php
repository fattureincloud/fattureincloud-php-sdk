<?php

namespace FattureInCloud\Filter;

abstract class Operator
{
    public const EQ = '=';
    public const GT = '>';
    public const GTE = '>=';
    public const LT = '<';
    public const LTE = '<=';
    public const NEQ = '<>';
    public const IS = 'is';
    public const IS_NOT = 'is not';
    public const LIKE = 'like';
    public const CONTAINS = 'contains';
    public const STARTS_WITH = 'starts with';
    public const ENDS_WITH = 'ends with';
}
