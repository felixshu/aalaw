<?php
class Settings_Forms_ContactTo {

    public static function createFields($form) {
        $form->addElement('text', 'contact_to', array(
            'filters' => array('StringTrim'),
            'required' => false,
            'label' => 'Contact to email',
            'class' => 'span7',
        ));
        $form->getElement('contact_to')->setBelongsTo('to_json');

        $form->addDisplayGroup(array('contact_to'), 'contact_to_group', array(
            'legend' => 'Contact form'
        ));
    }
}

