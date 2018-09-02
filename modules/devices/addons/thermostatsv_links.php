<?php

//дополнительные связи между устройствами для новых типов (если нужно)
//https://connect.smartliving.ru/comments/idea174.html
$this->device_links['SThermostatv'] = array(
        'LINK_NAME'=>'thermostatv_switch',
        'LINK_TITLE'=>LANG_DEVICES_LINK_THERMOSTAT_SWITCH,
        'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_THERMOSTAT_SWITCH_DESCRIPTION,
        'TARGET_CLASS'=>'SControllers',
        'PARAMS'=>array(
            array(
                'PARAM_NAME'=>'invert_status',
                'PARAM_TITLE'=>LANG_DEVICES_LINK_THERMOSTAT_INVERT,
                'PARAM_TYPE'=>'select',
                'PARAM_OPTIONS'=>array(
                    array('TITLE'=>LANG_NO,'VALUE'=>'0'),
                    array('TITLE'=>LANG_YES,'VALUE'=>'1')
            )
        )
    )
);
