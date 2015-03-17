<?php
namespace Site;
use Site\Article\Fields;
use Zend_Registry;

Zend_Registry::set('article/templates', array(
    'home' => array(
        'name' => 'Home',
        'template' => 'home',
        'form' => new Fields\Home()
    ),
));
