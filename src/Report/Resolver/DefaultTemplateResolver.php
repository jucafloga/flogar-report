<?php

namespace Flogar\Report\Resolver;

use Flogar\Model\DocumentInterface;

class DefaultTemplateResolver implements TemplateResolverInterface
{
    /**
     * @param DocumentInterface $document
     *
     * @return string
     *
     * @throws \Exception
     */
    public function getTemplate($document)
    {
        $className = get_class($document);
        switch ($className) {
            case \Flogar\Model\Sale\Invoice::class:
            case \Flogar\Model\Sale\Note::class:
                $name = 'invoice';
                break;
            case \Flogar\Model\Retention\Retention::class:
                $name = 'retention';
                break;
            case \Flogar\Model\Perception\Perception::class:
                $name = 'perception';
                break;
            case \Flogar\Model\Despatch\Despatch::class:
                $name = 'despatch';
                break;
            case \Flogar\Model\Summary\Summary::class:
                $name = 'summary';
                break;
            case \Flogar\Model\Voided\Voided::class:
            case \Flogar\Model\Voided\Reversion::class:
                $name = 'voided';
                break;
            default:
                throw new \Exception('Not found template for '.$className);
        }

        return $name.'.html.twig';
    }
}
