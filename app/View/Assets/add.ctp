<h1>Add Asset</h1>
<?php
echo $this->Form->create('Asset');
echo $this->Form->input('assets_type_id',array('type'=>'select'));
echo $this->Form->input('tag');
echo $this->Form->input('name');
echo $this->Form->input('notes');
echo $this->Form->end('Save');
?>