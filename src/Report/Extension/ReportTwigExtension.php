<?php

namespace Flogar\Report\Extension;

/**
 * Class ReportTwigExtension.
 */
class ReportTwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('catalog', ['Flogar\Report\Filter\DocumentFilter', 'getValueCatalog']),
            new \Twig_SimpleFilter('image_b64', ['Flogar\Report\Filter\ImageFilter', 'toBase64']),
            new \Twig_SimpleFilter('n_format', ['Flogar\Report\Filter\FormatFilter', 'number']),
        ];
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('legend', ['Flogar\Report\Filter\ResolveFilter', 'getValueLegend']),
            new \Twig_SimpleFunction('qrCode', ['Flogar\Report\Render\QrRender', 'getImage']),
        ];
    }
}
