<?php

namespace Flogar\Report\Filter;

use Flogar\Model\Sale\Legend;

/**
 * Class ResolveFilter.
 */
class ResolveFilter
{
    /**
     * @param Legend[] $legends
     * @param $code
     *
     * @return string
     */
    public function getValueLegend($legends, $code)
    {
        foreach ($legends as $legend) {
            if ($legend->getCode() == $code) {
                return $legend->getValue();
            }
        }

        return '';
    }
}
