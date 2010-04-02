<?php
class Infusionsoft_Generated_DataFormTab extends Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'FormId', 'TabName');
    
    
    public function __construct($id = null, $app = null){    	    	
    	parent::__construct('DataFormTab', $id, $app);    	    	
    }
    
    public function getFields(){
		return self::$tableFields;	
	}
}