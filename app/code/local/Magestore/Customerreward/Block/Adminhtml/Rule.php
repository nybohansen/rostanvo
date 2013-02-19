<?php
class Magestore_Customerreward_Block_Adminhtml_Rule extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_rule';
    $this->_blockGroup = 'customerreward';
    $this->_headerText = Mage::helper('customerreward')->__('Rule Manager');
    $this->_addButtonLabel = Mage::helper('customerreward')->__('Add Rule');
    parent::__construct();
  }
}