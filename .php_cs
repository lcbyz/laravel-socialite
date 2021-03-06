<?php
/**
 * PHP-CS-fixer configuration.
 */

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__ . '/src/')
;

return Symfony\CS\Config\Config::create()
    ->fixers(array (
  0 => 'symfony',
))
    ->finder($finder)
    ->setUsingCache(true)
;
