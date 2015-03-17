<?php
class Settings_Forms_SiteTitle {

    public static function createFields($form) {
        $form->addElement('text', 'site_title', array(
            'filters' => array('StringTrim'),
            'required' => false,
            'label' => 'Site Title',
            'class' => 'span7 tinymce',
        ));
        $form->getElement('site_title')->setBelongsTo('to_json');

        $form->addDisplayGroup(array('site_title'), 'site_title_group', array(
            'legend' => 'Title of the site, used in various places'
        ));
    }
}

