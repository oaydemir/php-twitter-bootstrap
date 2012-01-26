<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    echo new \BootstrapTwitter\UI\Label(
        array(
            'text' => 'message from config and default status'
        )
    );
    $label = new \BootstrapTwitter\UI\Label();
    echo $label->setText('Success')->setType('success');
    echo $label->setText('Warning')->setType('warning');
    echo $label->setText('Important')->setType('important');
    echo $label->setText('Notice')->setType('notice');
?>