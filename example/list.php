<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $list1 = \BootstrapTwitter\UI\Factory::getList('unordered');
    $list2 = \BootstrapTwitter\UI\Factory::getList('unstyled');
    $list3 = \BootstrapTwitter\UI\Factory::getList('ordered');
    $list4 = \BootstrapTwitter\UI\Factory::getList('description');

    echo $list1->addItem('item1')
        ->addItem(
            'item 2 '
            . $list2->addItem('item2_1')->addItem('item2_2')->addItem(
                'item2_3'
                . $list3->addItem('item2_3_1')->addItem(
                    'item2_3_2'
                    . $list4->addItem('item2_3_2_1', true)
                            ->addItem('item2_3_2_2')
                            ->addItem('item2_3_2_3')
                            ->addItem('item2_3_2_4')
                            ->addItem('item2_3_2_5', true)
                            ->addItem('item2_3_2_6')
                            ->addItem('item2_3_2_7')
                )
            )
        )
        ->addItem('item3');

?>