<?php

Zend_Registry::set('google_analytics/ua', '');

// Setting this to none allows tracking on any domain:
// http://stackoverflow.com/questions/4375447/can-you-test-google-analytics-on-a-localhost-address
Zend_Registry::set('google_analytics/site_domain', 'none');

Zend_Registry::set('google_analytics/profile_id', '');

Zend_Registry::set('google_analytics/private_key', file_get_contents(SITE_ROOT . '/data/google_analytics/privatekey.p12'));
Zend_Registry::set('google_analytics/client_id', '');
Zend_Registry::set('google_analytics/app_email', '');

