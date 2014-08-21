<?php
namespace Pfay\Contacts\Model;

/**
 * Factory class for \Magento\Catalog\Model\Product
 */
class ContactFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManager
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManager $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManager $objectManager, $instanceName = 'Pfay\Contacts\Model\Contact')
    {
     
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }
 
    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\Catalog\Model\Product
     */
    public function create(array $data = array())
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
