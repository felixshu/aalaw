<?php
//set allowed product status's
Zend_Registry::set('ecommerce/product/status', array(
        'active' => 'Active',
        'deleted' => 'Deleted'
));

//set when an item is updated as removed from stock, available settings are "onCartAdd", "OnCheckoutStart", "OnPurchaseConfirmed"
Zend_Registry::set('ecommerce/item/removeFromStock', 'onCartAdd');

//allowed item status
Zend_Registry::set('ecommerce/item/status',array(
   // array(
        'active' => "Active",
        'inCart' => "In Cart",
        'deleted' => "Deleted",
        'sold' => "Sold"
   // )
));

//allowed cart status'
Zend_Registry::set('ecommerce/cart/status',array(
    array(
        'active' => "Active",
        'stale' => "Stale",
        'deleted' => "Deleted",
        'checkedOut' => "Checked Out",
        'orphaned' => "Orphaned"
    )
));

//allowed cartItem status
Zend_Registry::set('ecommerce/cartitem/status',array(
    array(
        'active' => "Active",
        'stale' => "Stale",
    )
));

//how long a cart can remain inactive before it goes stale (86400 is one day), a value of 0 means it never goes stale
Zend_Registry::set('ecommerce/cart/staleSeconds',86400);

//tax rate and included/excluded
Zend_Registry::set('ecommerce/item/taxRate',15);
Zend_Registry::set('ecommerce/item/taxIncluded',false);

//how long an item can sit in a cart before being returned to stock (86400 is one day), a value of 0 means it never goes stale
Zend_Registry::set('ecommerce/item/staleSeconds',86400);

//can we generate auto serial numbers for items
Zend_Registry::set('ecommerce/item/generateSerial',true);

//if a customer is REQUIRED to be logged on to checkout
Zend_Registry::set('ecommnerce/checkout/loginRequired',false);

//available payment methods
Zend_Registry::set('ecommerce/checkout/paymentOptions',array(
        'dps' => array(
            'pxPay_Url' => 'https://sec.paymentexpress.com/pxpay/pxaccess.aspx',
            "pxPay_userId" => "Elleander_Dev",
            'pxPay_Key' => '431dac3087a7e29325679eab12f6dab0b81f1001752d2f7d20a20854d87f9afd'
        ),
       // 'paypal'=> "Paypal",
       // 'account' => "Account"
    
));

//current currency - left here cos a future expansion might require many currencies
Zend_Registry::set('ecommerce/checkout/currency',"NZD");

//payment success and failure urls - if these urls change, then the routes need
//to be updated too
Zend_Registry::set('ecommerce/checkout/paySuccess','http://cms-site-template/ecommerce/paymentsuccess');
Zend_Registry::set('ecommerce/checkout/payFail','http://cms-site-template/ecommerce/paymentfail');

