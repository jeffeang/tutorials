<?php

namespace Pfay\Contacts\Block\Adminhtml;

class Contact extends \Magento\Backend\Block\Widget\Container
{
    /**
     * @var string
     */
    protected $_template = 'contact.phtml';

    /**
     * @return $this
     */
    public function _beforeToHtml()
    {
        return parent::_beforeToHtml();
    }

    /**
     * Prepare button and grid
     *
     * @return \Magento\Catalog\Block\Adminhtml\Product
     */
    protected function _prepareLayout()
    {
         $this->addButton(
            'add',
            array(
                'label' => 'Ajouter un contact',
                'onclick' => 'setLocation(\'' . $this->getUrl('contacts/*/add'). '\');',
                'class' => 'add primary'
            )
        );

        return parent::_prepareLayout();
    }
    
   
}
