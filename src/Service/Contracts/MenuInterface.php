<?php

namespace DruiD628\Test\Menu\Service\Contracts;

use PhpSchool\CliMenu\CliMenu;

interface MenuInterface
{
    public function __invoke(CliMenu $menu);

}