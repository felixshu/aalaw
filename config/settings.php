<?php

$settingsForms = array();
if (Zend_Registry::isRegistered('settings/forms')) {
    $settingsForms = Zend_Registry::get('settings/forms');
}

$settingsForms['site_title'] = new Settings_Forms_SiteTitle();

Zend_Registry::set('settings/forms', $settingsForms);

