<?php

namespace DruiD628\Test\Menu\Service;

use PhpSchool\CliMenu\CliMenu;

abstract class AbstractMenu
{
    protected $protectedValue;

    public function __invoke(CliMenu $menu)
    {
        echo $this->protectedValue . "\n";
    }
}