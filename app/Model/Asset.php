<?php

class Asset extends AppModel {
    var $name = 'Asset';
    var $belongsTo = array('Company','AssetsType');
    var $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
            ),
        );    
}

?>