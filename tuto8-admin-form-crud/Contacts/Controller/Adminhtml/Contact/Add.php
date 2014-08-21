<?php

namespace Pfay\Contacts\Controller\Adminhtml\Contact;

class Add extends \Magento\Backend\App\Action
{
    /**
     * Add action
     *
     * @return void
     */
    public function execute()
    {
        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $this->_objectManager->get('Magento\Framework\Registry')->register('contact', $contact); 
        $this->_view->loadLayout();        
        $this->_view->renderLayout();
    }
}
