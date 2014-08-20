<?php
namespace Pfay\Contacts\Model\Resource;

/**
 * Contact Resource Model 
 * 
 * @author      Pierre FAY <contact@pierrefay.fr>
 */
class Contact extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('pfay_contacts', 'pfay_contacts_id');
    }
}
