<h1>Edit Company</h1>
<?php
    echo $this->Form->create('Company', array('action' => 'edit'));
    echo $this->Form->input('name');
    echo $this->Form->input('tag_prefix');    
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Company');
?>