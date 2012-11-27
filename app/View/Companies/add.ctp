<h1>Add Company</h1>
<?php
echo $this->Form->create('Company');
echo $this->Form->input('name');
echo $this->Form->input('tag_prefix');
echo $this->Form->end('Save Company');
?>