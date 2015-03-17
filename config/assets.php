<?php
use CMS\Assets;

Assets::add('js', []);
Assets::add('css', [
    '/css/styles.css'
]);

Assets::add('cms-css', [
    '/bower/angular-busy/angular-busy.css'
]);

Assets::add('cms-js', array(
    '/bower/angular/angular.js',
    '/bower/angular-resource/angular-resource.js',
    '/bower/angular-animate/angular-animate.js',
    '/bower/angular-busy/angular-busy.js',
    '/bower/ng-table/ng-table.js',
));

Assets::add('cms-site-js-final', array(
    '/bower/ng-application-bootstrap/bootstrap.js'
));
