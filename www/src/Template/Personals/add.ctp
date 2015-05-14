<h1>Add Personal Data Set</h1>
<?php
    echo $this->Form->create($personal);
    echo $this->Form->input('first_name');
    echo $this->Form->input('last_name');
    echo $this->Form->input('born_date');
    echo $this->Form->input('born_place');
    echo $this->Form->input('address');
    echo $this->Form->input('phone');
    echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>