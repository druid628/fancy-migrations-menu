<?php

namespace DruiD628\Test\Menu\Service;

class MenuObject1 extends AbstractMenu
{
    public static $NAME = 'NG-628';

    protected $protectedValue = 'Doc McStuffAndThangs';

    /**
     * @inheritDoc
     */
    public function execute(): bool
    {
        return true;
    }

}