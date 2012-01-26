<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $span1 = new BootstrapTwitter\UI\Grid\Span();
    $span1->setSize(1)->setInnerHtml('G');

    $span2 = new BootstrapTwitter\UI\Grid\Span();
    $span2->setSize(2)->setInnerHtml('G');

    $span3 = new BootstrapTwitter\UI\Grid\Span();
    $span3->setSize(3)
        ->setOffset(2)
        ->setInnerHtml('G');

    $span4 = new BootstrapTwitter\UI\Grid\Span();
    $span4->setSize(4)->setInnerHtml('G');

    $span5 = new BootstrapTwitter\UI\Grid\Span();
    $span5->setSize(5)->setInnerHtml('G');

    $span6 = new BootstrapTwitter\UI\Grid\Span();
    $span6->setSize(6)->setInnerHtml('G');

    $span7 = new BootstrapTwitter\UI\Grid\Span();
    $span7->setSize(7)->setInnerHtml('G');

    $span8 = new BootstrapTwitter\UI\Grid\Span();
    $span8->setSize(8)->setInnerHtml('G');

    $span9 = new BootstrapTwitter\UI\Grid\Span();
    $span9->setSize(9)->setInnerHtml('G');

    $span10 = new BootstrapTwitter\UI\Grid\Span();
    $span10->setSize(10)->setInnerHtml('G');

    $span11 = new BootstrapTwitter\UI\Grid\Span();
    $span11->setSize(11)->setInnerHtml('G');

    $span12 = new BootstrapTwitter\UI\Grid\Span();
    $span12->setSize(12)->setInnerHtml('G');

    $span13 = new BootstrapTwitter\UI\Grid\Span();
    $span13->setSize(13)->setInnerHtml('G');

    $span14 = new BootstrapTwitter\UI\Grid\Span();
    $span14->setSize(14)->setInnerHtml('G');

    $span15 = new BootstrapTwitter\UI\Grid\Span();
    $span15->setSize(15)->setInnerHtml('G');

    $span16 = new BootstrapTwitter\UI\Grid\Span();
    $span16->setSize(16)->setInnerHtml('G');

    $span1_3 = new BootstrapTwitter\UI\Grid\Span();
    $span1_3->setSize('1/3')->setInnerHtml('G');

    $span2_3 = new BootstrapTwitter\UI\Grid\Span();
    $span2_3->setSize('2/3')->setInnerHtml('G');

    $row1 = new BootstrapTwitter\UI\Grid\Row();
    $row1->addSpan($span1)
        ->addSpan($span3)
        ->addSpan($span10);

    $row2 = new BootstrapTwitter\UI\Grid\Row();
    $row2->addSpan($span2_3)
        ->addSpan($span1_3);

    $row3 = new BootstrapTwitter\UI\Grid\Row();
    $row3->addSpan($span16);

    $grid = new BootstrapTwitter\UI\Grid();
    $grid->addRow($row1)
        ->addRow($row2)
        ->addRow($row3);

    echo $grid;
?>