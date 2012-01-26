<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $heading = new \BootstrapTwitter\UI\Custom();
    echo $heading->setName('h1')->setInnerHtml('Heading #1');
    echo $heading->setName('h2')->setInnerHtml('Heading #2');
    echo $heading->setName('h3')->setInnerHtml('Heading #3');
    echo $heading->setName('h4')->setInnerHtml('Heading #4');
    echo $heading->setName('h5')->setInnerHtml('Heading #5');
    echo $heading->setName('h6')->setInnerHtml('Heading #6');

    $small = new BootstrapTwitter\UI\Custom(array('name'=>'small'));
    echo $heading->setName('h1')->setInnerHtml(
        $small->addInnerHtml('small text in header')
    )
?>