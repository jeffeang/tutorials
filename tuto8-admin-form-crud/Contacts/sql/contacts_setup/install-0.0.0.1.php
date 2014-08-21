<?php

/* @var $installer \Magento\Framework\Module\Setup */

$installer = $this;

$installer->startSetup();

/**
 * Create table 'pfay_contacts'
 */
$table = $installer->getConnection()->newTable(
    $installer->getTable('pfay_contacts')
)->addColumn(
    'pfay_contacts_id',
    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    null,
    array('identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true),
    'Schedule Id'
)->addColumn(
    'name',
    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
    255,
    array('nullable' => false, 'default' => ''),
    'Name'
)
->addIndex(
    $installer->getIdxName('pfay_contacts', array('name')),
    array('name')
)->setComment(
    'Pfay Contacts'
);
$installer->getConnection()->createTable($table);

$installer->endSetup();
