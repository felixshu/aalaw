<?php

switch (APPLICATION_ENV) {
    case 'mike':
    case 'leo':
    case 'production':
    case 'development': {
        Zend_Registry::set('contact/fromEmail', Setting::getValue('contact_email'));
        Zend_Registry::set('contact/fromName', Setting::getValue('site_title'));
        Zend_Registry::set('contact/to', $toEmail);
        Zend_Registry::set('contact/bcc', array(
            'bcc@brownpaperbag.co.nz'
        ));
     }
}
