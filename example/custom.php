<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $heading = new \BootstrapTwitter\UI\Custom();
    echo $heading->setName('h1')->addInnserHtml('Heading #1');
    echo $heading->setName('h2')->addInnserHtml('Heading #2');
    echo $heading->setName('h3')->addInnserHtml('Heading #3');
    echo $heading->setName('h4')->addInnserHtml('Heading #4');
    echo $heading->setName('h5')->addInnserHtml('Heading #5');
    echo $heading->setName('h6')->addInnserHtml('Heading #6');

    $small = new BootstrapTwitter\UI\Custom(array('name'=>'small'));
    echo $heading->setName('h1')->setInnerHtml(
        $small->addInnerHtml('small text in header')
    )
?>