<?php
/**
 * Newsletter Template Edit Block
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
namespace Pfay\Contacts\Block\Adminhtml\Contact;

class Edit extends \Magento\Backend\Block\Widget
{
    /**
     * Preparing block layout
     *
     * @return $this
     */
    protected function _prepareLayout()
    {
        $this->getToolbar()->addChild(
            'back_button',
            'Magento\Backend\Block\Widget\Button',
            array(
                'label' => __('Back'),
                'onclick' => "window.location.href = '" . $this->getUrl('*/*') . "'",
                'class' => 'action-back'
            )
        );

        $this->getToolbar()->addChild(
            'reset_button',
            'Magento\Backend\Block\Widget\Button',
            array(
                'label' => __('Reset'),
                'onclick' => 'window.location.href = window.location.href',
                'class' => 'reset'
            )
        );

        if ($this->getEditMode()) {
            $this->getToolbar()->addChild(
                'delete_button',
                'Magento\Backend\Block\Widget\Button',
                array(
                    'label' => __('Delete Template'),
                    'onclick' => 'templateControl.deleteTemplate();',
                    'class' => 'delete'
                )
            );

        }

        $this->getToolbar()->addChild(
            'save_button',
            'Magento\Backend\Block\Widget\Button',
            array('label' => __('Save'), 'onclick' => '$(\'contact_form\').submit();', 'class' => 'save primary')
        );

        return parent::_prepareLayout();
    }
 
    /**
     * Return action url for form
     *
     * @return string
     */
    public function getSaveUrl()
    {
        return $this->getUrl('*/*/save');
    }

    /**
     * Return delete url for customer group
     *
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('*/*/delete', array('id' => $this->getRequest()->getParam('id')));
    }

    /**
     * Retrieve Save As Flag
     *
     * @return int
     */
    public function getSaveAsFlag()
    {
        return $this->getRequest()->getParam('_save_as_flag') ? '1' : '';
    }
}
