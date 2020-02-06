<?php

namespace Flogar\Report\Filter;

/**
 * Class FormatFilter
 */
class FormatFilter
{
    public function number($number, $decimals = 2)
    {
        return number_format($number, $decimals, '.', '');
    }
}