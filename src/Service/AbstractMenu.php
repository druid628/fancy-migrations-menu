<?php

namespace DruiD628\Test\Menu\Service;

use Exception;
use PhpSchool\CliMenu\CliMenu;

abstract class AbstractMenu
{
    /**
     * @static
     * @var string $NAME
     */
    public static $NAME = 'YOU_SHOULD_NOT_SEE_ME'; // placeholder

    /** @var mixed $protectedValue */
    protected $protectedValue;

    public function __invoke(CliMenu $menu): bool
    {
        return $this->execute();
    }

    /**
     * @return bool
     * @throws Exception
     *
     */
    public function execute(): bool
    {
        throw new Exception("Method Not Implemented");
    }

    /**
     * @return bool
     * @throws Exception
     *
     */
    public function markCompleted(): bool
    {
        throw new Exception("Method Not Implemented");
    }

    public function __toString(): string
    {
        return $this->getName();
    }

    public function getName(): string
    {
        return static::$NAME;
    }

    public function getTicket(): string
    {
        return preg_replace('/-/', '', static::$NAME);
    }

}