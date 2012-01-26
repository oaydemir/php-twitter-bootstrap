<?php
    require_once '../src/BootstrapTwitter/Autoloader.php';

    $pre = new \BootstrapTwitter\UI\Pre();
    echo $pre->addInnerHtml('test simple pre');
    $pre2 = new \BootstrapTwitter\UI\Pre(
        "<html>
            <head>
            </head>
            <body>
            </body>
        </html>"
    );
    echo $pre2->getPrettyprint()->addClasses('lang-html');
    echo new \BootstrapTwitter\UI\Pre('test pre from construct');

    echo new \BootstrapTwitter\UI\Code('test code from construct');
    $code = new \BootstrapTwitter\UI\Code();
    echo $code->addInnerHtml('test code without construct');
?>