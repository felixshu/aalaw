<?php
//set allowed category status's
Zend_Registry::set('product/category/status', array(
        'active' => 'Active',
        'deleted' => 'Deleted'
));

//set allowed tag status's
Zend_Registry::set('product/tag/status', array(
        'active' => 'Active',
        'deleted' => 'Deleted'
));

//set allowed nested's
Zend_Registry::set('product/category/allowNested',false);