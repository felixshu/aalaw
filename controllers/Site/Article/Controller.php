<?php
use Site\Contact;

class Site_Article_Controller extends Zend_Controller_Action {

    public function contactLogic() {
        $form = new Contact\Form();
        $this->view->form = $form;
        $this->view->message = false;

        if ($this->getRequest()->isPost() && $form->isValid($this->getRequest()->getPost())) {
            $values = $form->getValues();
            $submission = new Submission($values);
            $submission->name = 'Contact';
            $submission->save();
            if ($submission->send(Zend_Registry::get('contact/to'), Zend_Registry::get('contact/bcc'))) {
                $this->_redirect('/contact/thank-you');
            } else {
                $this->view->messageClass = 'error';
                $this->view->message = 'Your message could not be sent, please try again';
            }
        }
    }

}
