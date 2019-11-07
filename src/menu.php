<?php

use PhpSchool\CliMenu\CliMenu;
use PhpSchool\CliMenu\Builder\CliMenuBuilder;
use DruiD628\Test\Menu\Service\{
    MenuObject1,
    MenuObject2,
    MenuObject3
};

require_once(__DIR__ . '/../vendor/autoload.php');

/*
$itemCallable = function (CliMenu $menu) {
    echo $menu->getSelectedItem()->getText();
};
*/

$migrationsCompleted = [
    'NG628' => new DateTime(),
    'NG529' => new DateTime(),
];

$callable1 = new MenuObject1();
$callable2 = new MenuObject2();
$callable3 = new MenuObject3();

$asciiArt = <<<ART

######                  ######   #####   #####   #####  
#     # #####  #    # # #     # #     # #     # #     # 
#     # #    # #    # # #     # #             # #     # 
#     # #    # #    # # #     # ######   #####   #####  
#     # #####  #    # # #     # #     # #       #     # 
#     # #   #  #    # # #     # #     # #       #     # 
######  #    #  ####  # ######   #####  #######  #####  
                                                   
ART;

$menu = (new CliMenuBuilder)
    ->addAsciiArt($asciiArt)
    ->setTitle('DruiD628 Migration Menu')
    ->addItem($callable1, $callable1, isset($migrationsCompleted[$callable1->getTicket()]), (isset($migrationsCompleted[$callable1->getTicket()])))
    ->addItem($callable2, $callable2, isset($migrationsCompleted[$callable2->getTicket()]), (isset($migrationsCompleted[$callable2->getTicket()])))
    ->addItem($callable3, $callable3, isset($migrationsCompleted[$callable3->getTicket()]), (isset($migrationsCompleted[$callable3->getTicket()])))
    ->addLineBreak('-')
    ->setBorder(1, 2, 'white')
    ->setBackgroundColour('237')
    ->setForegroundColour('156')
//    ->setBackgroundColour('blue')
//    ->setForegroundColour('green')
    ->setPadding(2, 4)
    ->setItemExtra('[COMPLETE]')
    ->setMarginAuto()
    ->build();


$menu->open();
