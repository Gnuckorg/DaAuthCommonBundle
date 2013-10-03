<?php

namespace Da\AuthCommonBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Da\AuthCommonBundle\DependencyInjection\DaAuthCommonExtension;

class DaAuthCommonBundle extends Bundle
{
    public function __construct()
    {
        $this->extension = new DaAuthCommonExtension();
    }
}
