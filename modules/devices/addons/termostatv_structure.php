<?php
$this->device_types['thermostat'] = array(
    'TITLE'=>"Термостат векторный",
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SThermostatsVector',
    'PROPERTIES'=>array(
        'currentTargetValue'=>array('DESCRIPTION'=>'Целевая температура'),
        'ecoTargetValue'=>array('DESCRIPTION'=>'ECO целевая температура','ONCHANGE'=>'valueUpdated','_CONFIG_TYPE'=>'num'),
        'ncno'=>array('DESCRIPTION'=>'Тип устройства/сенсора','_CONFIG_TYPE'=>'num'),
        'normalTargetValue'=>array('DESCRIPTION'=>'Обычная целевая температура','ONCHANGE'=>'valueUpdated','_CONFIG_TYPE'=>'yesno')        
        'relay_status'=>array('DESCRIPTION'=>'Статус реле','_CONFIG_TYPE'=>'num'),
        'threshold'=>array('DESCRIPTION'=>'Порог срабатывания термостата (0.25 по-умолчанию)','ONCHANGE'=>'valueUpdated','_CONFIG_TYPE'=>'num'),
        'value'=>array('DESCRIPTION'=>'Текущая температура','ONCHANGE'=>'valueUpdated','KEEP_HISTORY'=>365,'DATA_KEY'=>1)
    ),
    'METHODS'=>array(
        'statusUpdated'=>array('DESCRIPTION'=>'Status Updated'),
        'tempDown'=>array('DESCRIPTION'=>'Descrease target temperature'),
        'tempUp'=>array('DESCRIPTION'=>'Increase target temperature'),
        'valueUpdated'=>array('DESCRIPTION'=>'Value Updated','CALL_PARENT'=>1), 
    ));
        
