<?php

namespace DruiD628\Test\Menu\Service\Contracts;

use Exception;
use PhpSchool\CliMenu\CliMenu;

interface MenuInterface
{
    /**
     * @param CliMenu $menu
     * @return bool
     */
    public function __invoke(CliMenu $menu): bool;

    /**
     * @return string
     */
    public function __toString(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * Returns a simplified version of the ticket number
     * Removes dashes from the ticket number
     *
     * @return string
     */
    public function getTicket(): string;

    /**
     * Execution of the migration that's on you how to make that happen
     *
     * @throws Exception
     *
     * @return bool
     */
    public function execute(): bool;

    /**
     * Final step of adding to migrations table
     * returns true if successful false if not
     *
     * @return bool
     */
    public function markComplete(): bool;
}