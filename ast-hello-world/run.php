<?php

require __DIR__.'/../vendor/autoload.php';

$env = new Twig_Environment();
$lexer = new Twig_Lexer($env);

$tokens = $lexer->tokenize("Hello {{ aaa }} {% block right %} {% endblock %}");
$module = $env->parse($tokens);

$class = new ReflectionClass(Twig_Node::class);

$attr_field = $class->getProperty("attributes");
$attr_field->setAccessible(true);

$nodes_field = $class->getProperty("nodes");
$nodes_field->setAccessible(true);

echo $module->__toString();
