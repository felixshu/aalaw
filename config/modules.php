<?php
function loadSiteModules() {
     $frontController = Zend_Controller_Front::getInstance();

     $frontController->addControllerDirectory(SITE_ROOT . '/controllers', 'site');
     $frontController->addControllerDirectory(SITE_ROOT . '/vendor/brownpaperbag/cms-auth/controllers', 'auth');
     $frontController->addControllerDirectory(SITE_ROOT . '/vendor/brownpaperbag/cms-filemanager/controllers', 'filemanager');
     $frontController->addControllerDirectory(SITE_ROOT . '/vendor/brownpaperbag/cms-google-analytics/controllers', 'googleAnalytics');
}
