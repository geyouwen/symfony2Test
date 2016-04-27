<?php
/**
 * Created by PhpStorm.
 * User: geyouwen
 * Date: 4/25/16
 * Time: 8:48 AM
 */
$container->loadFromExtension('framework', array(
    // ...
    'router' => array(
        'resource' => '%kernel.root_dir%/config/routing.php',
    ),
));
