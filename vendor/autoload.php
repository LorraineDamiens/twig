<?php

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInit06b11330ffec2346a9e64a40083b31ef::getLoader();

$loader = new TwigLoaderFilesystemLoader(__DIR__.'/../View');
$twig = new TwigEnvironment($loader);
echo $twig->render('base.html.twig');