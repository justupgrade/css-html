<h1>Add education:</h1>
<?php
    echo $this->Form->create($education);
    echo $this->Form->input('name');
    echo $this->Form->input('start');
    echo $this->Form->input('finish');
    echo $this->Form->button(__('Add'));
    echo $this->Form->end();
?>