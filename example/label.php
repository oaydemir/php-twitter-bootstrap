<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    echo new \BootstrapTwitter\UI\Label(
        array(
            'text' => 'default'
        )
    );
    $label = new \BootstrapTwitter\UI\Label();
    echo $label->setText('Success')->setType('success');
    $label = new \BootstrapTwitter\UI\Label();
    echo $label->setText('Warning')->setType('warning');
    $label = new \BootstrapTwitter\UI\Label();
    echo $label->setText('Important')->setType('important');
    $label = new \BootstrapTwitter\UI\Label();
    echo $label->setText('Notice')->setType('notice');
?>