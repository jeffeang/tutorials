<?php

namespace Pfay\Contacts\Controller\Adminhtml\Contact;

class MassDelete extends \Magento\Backend\App\Action
{
    /**
     * MassDelete action
     *
     * @return void
     */
    public function execute()
    {
        $ids = $this->getRequest()->getParam('ids');
        foreach($ids as $id) {
            if (!($contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact')->load($id))) {
                $this->messageManager->addError(__('Unable to proceed. Please, try again.'));
                $this->_redirect('*/*/index', array('_current' => true));
                return;
            }
            try{
                $name= $contact->getName();
                $contact->delete();
            } catch (Exception $e) {
                $this->messageManager->addError(__('Error while trying to delete contact: ') . $name);
                $this->_redirect('*/*/index', array('_current' => true));
            }
        }
        $this->messageManager->addSuccess(__('Your contacts has been deleted !'));
        $this->_redirect('*/*/index', array('_current' => true));
    }
}