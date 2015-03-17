<?php
namespace Site\Article\Fields;

class Home {
    public static function createFields($form) {
        $form->addElement('textarea', 'content', array(
            'filters' => array('StringTrim'),
            'required' => false,
            'label' => 'Content',
            'id' => 'block_content',
            'class' => 'span7 tinymce',
        ));
        $form->getElement('content')->setBelongsTo('to_json');
    }
}
