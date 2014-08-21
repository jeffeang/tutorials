<?php

namespace Pfay\Contacts\Controller\Adminhtml\Contact;

class Save extends \Magento\Backend\App\Action {

    /**
     * Save action
     *
     * @return void
     */
    public function execute() {
        $name = $this->getRequest()->getParam('name');
        $id = $this->getRequest()->getParam('id');
     
        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact')->load($id);
        if (isset($name) && ($name != '')) {
            $contact->setName($name); 
            try {
                $contact->save();
                $this->messageManager->addSuccess(__('Saved contact: ') . $name);
            } catch (Exception $e) {
                $this->messageManager->addError(__('Error while trying to save value: ') . $name);
            }         
        }
          $this->_redirect('*/*/index', array('_current' => true));
    }

}
