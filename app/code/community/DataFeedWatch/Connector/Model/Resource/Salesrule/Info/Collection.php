<?php
class DataFeedWatch_Connector_Model_Resource_Salesrule_Info_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct()
    {
        $this->_init('connector/salesrule_info');
    }
}