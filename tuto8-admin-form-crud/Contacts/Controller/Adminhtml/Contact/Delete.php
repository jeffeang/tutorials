<?php

namespace Pfay\Contacts\Controller\Adminhtml\Contact;

class Delete extends \Magento\Backend\App\Action
{
    /**
     * Delete action
     *
     * @return void
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        if (!($contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact')->load($id))) {
                $this->messageManager->addError(__('Unable to proceed. Please, try again.'));
                $this->_redirect('*/*/index', array('_current' => true));
                return;
            }
            
        try{
           $contact->delete();
           $this->messageManager->addSuccess(__('Your contact has been deleted !'));
       } catch (Exception $e) {
           $this->messageManager->addError(__('Error while trying to delete contact: ') . $name);
           $this->_redirect('*/*/index', array('_current' => true));
       }
       
       $this->_redirect('*/*/index', array('_current' => true));
    }
}
