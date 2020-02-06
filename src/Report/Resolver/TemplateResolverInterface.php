<?php

namespace Flogar\Report\Resolver;

use Flogar\Model\DocumentInterface;

interface TemplateResolverInterface
{
    /**
     * @param DocumentInterface $document
     * @return string
     */
    function getTemplate($document);
}