<?php
namespace Pfay\Contacts\Model\Resource\Contact;

/**
 * Contact Resource Model Collection
 * 
 * @author      Pierre FAY <contact@pierrefay.fr>
 */
class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Pfay\Contacts\Model\Contact', 'Pfay\Contacts\Model\Resource\Contact');
    }
}
