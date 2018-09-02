<?php
 
$this->device_types['thermostatv'] = array(
        'TITLE'=>"Термостат векторный",
        'CLASS'=>'SThermostatsv',
        'PARENT_CLASS'=>'SControllers',
        'DESCRIPTION'=>'Термостат векторный',
        'PROPERTIES'=>array(
            'relay_status'=>array('DESCRIPTION'=>LANG_DEVICES_THERMOSTAT_RELAY_STATUS,'KEEP_HISTORY'=>365,'DATA_KEY'=>1),
            'value'=>array('DESCRIPTION'=>LANG_DEVICES_THERMOSTAT_CURRENT_TEMP,'ONCHANGE'=>'valueUpdated','KEEP_HISTORY'=>365,'DATA_KEY'=>1),
            'currentTargetValue'=>array('DESCRIPTION'=>LANG_DEVICES_THERMOSTAT_CURRENT_TARGET_TEMP,'DATA_KEY'=>1),
            'normalTargetValue'=>array('DESCRIPTION'=>LANG_DEVICES_THERMOSTAT_NORMAL_TEMP,'_CONFIG_TYPE'=>'text','ONCHANGE'=>'valueUpdated','_CONFIG_HELP'=>'SdThermostat'),
            'ecoTargetValue'=>array('DESCRIPTION'=>LANG_DEVICES_THERMOSTAT_ECO_TEMP,'_CONFIG_TYPE'=>'text','ONCHANGE'=>'valueUpdated','_CONFIG_HELP'=>'SdThermostat'),
            'threshold'=>array('DESCRIPTION'=>LANG_DEVICES_THERMOSTAT_THRESHOLD,'_CONFIG_TYPE'=>'text','ONCHANGE'=>'valueUpdated','_CONFIG_HELP'=>'SdThermostat'),
            'ncno'=>array('DESCRIPTION'=>LANG_DEVICES_NCNO,'_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'nc=Normal Close,no=Normal Open','_CONFIG_HELP'=>'SdThermostat'),
    ),
        'METHODS'=>array(
            'valueUpdated'=>array('DESCRIPTION'=>'Value Updated'),
            'statusUpdated'=>array('DESCRIPTION'=>'Status Updated'),
            'tempUp'=>array('DESCRIPTION'=>'Increase target temperature'),
            'tempDown'=>array('DESCRIPTION'=>'Descrease target temperature'),
    )
);
