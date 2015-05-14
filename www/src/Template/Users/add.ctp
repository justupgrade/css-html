<h1>Sign Up</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>