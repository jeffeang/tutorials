<?php

/**
 * Contacts Contact Edit Form Block
 *
 * @author  Pierre FAY 
 */
namespace Pfay\Contacts\Block\Adminhtml\Contact\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * Set form id and title
     *
     * @return void
     */
    protected function _construct()
    {   
        parent::_construct();
        $this->setId('contact_form');
        $this->setTitle(__('Contact Information'));
    }


    /**
     * Prepare form before rendering HTML
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $form = $this->_formFactory->create(
            array('data' => array(
                        'id' => 'contact_form', 
                        'action' => $this->getUrl('/*/*/save'),
                         'method' => 'post'))
        );

        $fieldset = $form->addFieldset(
            'base_fieldset',
            array('legend' => __('Contact Information'), 'class' => 'fieldset-wide')
        );

        $fieldset->addField(
                        'pfay_contacts_id',
                        'hidden',
                        array('name' => 'id', 'no_span' => true, 'value' => $this->getContact()->getId())
                    );
        
        $fieldset->addField(
            'name',
            'text',
            array(
                'name' => 'name',
                'label' => __('Contact Name'),
                'title' => __('Contact Name'),
                'required' => true,
                'value' => $this->getContact()->getName()
            )
        );
        
        $form->setAction($this->getUrl('*/*/save'));
        $form->setUseContainer(true);
        $this->setForm($form);
        
        return parent::_prepareForm();
    }
    
    protected function getContact()
    {
           return $this->_coreRegistry->registry('contact');
    }
}
