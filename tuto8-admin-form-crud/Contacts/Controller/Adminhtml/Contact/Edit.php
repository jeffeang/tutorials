<?php

namespace Pfay\Contacts\Controller\Adminhtml\Contact;

class Edit extends \Magento\Backend\App\Action
{
    /**
     * Edit action
     *
     * @return void
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact')->load($id);
        if (! $contact->getId()) {
            $this->_redirect('*/*/add', array('_current' => true));
            return;
        }
        $this->_objectManager->get('Magento\Framework\Registry')->register('contact', $contact);
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
