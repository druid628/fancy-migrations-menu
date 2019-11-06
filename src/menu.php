<?php

use PhpSchool\CliMenu\CliMenu;
use PhpSchool\CliMenu\Builder\CliMenuBuilder;
use DruiD628\Test\Menu\Service\{ MenuObject1, MenuObject2 };

require_once(__DIR__ . '/../vendor/autoload.php');

$itemCallable = function (CliMenu $menu) {
    echo $menu->getSelectedItem()->getText();
};

$callable1 = new MenuObject1();
$callable2 = new MenuObject2();

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
    ->addItem('First Item', $itemCallable, true)
    ->addItem('Second Item', $itemCallable, true)
    ->addItem('Third Item', $itemCallable, true)
    ->addLineBreak('-')
    ->addItem('Fourth Item', $callable1)
    ->addItem('Fifth Item', $callable2)
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
