<h1>View Asset</h1>
<?php
echo $this->Form->create('Asset');
echo $this->Form->input('assets_type_id',array('type'=>'select', 'disabled' => true));
echo $this->Form->input('tag', array('disabled' => true));
echo $this->Form->input('name', array('disabled' => true));
echo $this->Form->input('notes');
echo $this->Form->end('Save');
?>