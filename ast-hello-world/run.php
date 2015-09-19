<?php

require __DIR__.'/../vendor/autoload.php';

$env = new Twig_Environment();
$lexer = new Twig_Lexer($env);

$tokens = $lexer->tokenize("Hello {{ value }}");
$module = $env->parse($tokens);

var_dump($module);

