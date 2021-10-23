<?php

use ishop\Router;

Router::add('^product/(?P<alias>[a-z 0-9-]+)/?$', ['controller' => 'Product', 'action'=> 'view']);

//default routes
// Для админки
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

// дефолтные правила
Router::add('^$', ['controller' => 'Main', 'action' => 'index']); //данный шаб рег выр совпадает с главной строкой так как пустота, нет в ней доп страниц в строке
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$'); //второй шаблон с исп рег выражения
