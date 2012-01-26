<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $button = new \BootstrapTwitter\UI\Button();
    echo $button;
    $button = new \BootstrapTwitter\UI\Button();
    echo $button->setValue('Primary Button')->setColorType('primary');
    $button = new \BootstrapTwitter\UI\Button();
    echo $button->setValue('Info Button')->setColorType('info');
    $button = new \BootstrapTwitter\UI\Button();
    echo $button->setValue('Success Button')->setColorType('success');
    $button = new \BootstrapTwitter\UI\Button();
    echo $button->setValue('Danger Button')->setColorType('danger');
?>