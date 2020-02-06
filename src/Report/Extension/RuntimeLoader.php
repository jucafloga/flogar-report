<?php

namespace Flogar\Report\Extension;

/**
 * Class RuntimeLoader.
 */
class RuntimeLoader implements \Twig_RuntimeLoaderInterface
{
    public function load($class)
    {
        return new $class();
    }
}
