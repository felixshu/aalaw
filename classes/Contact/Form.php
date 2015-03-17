<?php
namespace Site\Contact;
use Twitter_Bootstrap_Form_Horizontal;

class Form extends Twitter_Bootstrap_Form_Horizontal {

    public function init() {
        parent::init();

        $this->setAction('');

        $this->addElement('text', 'first_name', [
            'filters' => ['StringTrim'],
            'class' => 'contact-first-name',
            'placeholder' => 'First name',
            'label' => 'First name*',
            'required' => true,
        ]);
        $this->getElement('first_name')->addDecorators([
            ['HtmlTag', ['class' => 'contact-first-name' ]],
        ]);

        $this->addElement('text', 'last_name', [
            'filters' => ['StringTrim'],
            'class' => 'contact-last-name',
            'placeholder' => 'Last name',
            'label' => 'Last name *',
            'required' => true,
        ]);
        $this->getElement('last_name')->addDecorators([
            ['HtmlTag', ['class' => 'contact-last-name' ]],
        ]);

        $this->addElement('text', 'email', [
            'type' => 'email',
            'filters' => ['StringTrim'],
            'validators' => ['EmailAddress'],
            'placeholder' => 'Email',
            'label' => 'Email *',
            'required' => true,
        ]);
        $this->getElement('email')->addDecorators([
            ['HtmlTag', ['class' => 'contact-subject' ]],
        ]);

        $this->addElement('text', 'subject', [
            'placeholder' => 'Subject',
            'label' => 'Subject *',
            'filters' => ['StringTrim'],
            'required' => true,
        ]);
        $this->getElement('subject')->addDecorators([
            ['HtmlTag', ['class' => 'contact-subject' ]],
        ]);

        $this->addElement('textarea', 'message', [
            'filters' => ['StringTrim'],
            'placeholder' => 'Message',
            'label' => 'Message *',
            'required' => true,
        ]);
        $this->getElement('message')->addDecorators([
            ['HtmlTag', ['class' => 'contact-message' ]],
        ]);

        $this->addDisplayGroup(['message'], 'fourthrow', ['decorators' => ['FormElements', ['HtmlTag', []]]]);

        $this->addElement('submit', 'submit', array(
            'label' => 'Submit',
            'class' => 'contact-submit'
        ));

        $this->addDisplayGroup(
            array('submit'),
            'actions',
            array( 'decorators' => array('Actions'))
        );

    }

}
