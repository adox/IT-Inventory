<?php

class Company extends AppModel {
    var $name = 'Company';
    var $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
            ),
        );    
}

?>

