<h2>Add post</h2>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body');
echo $this->Form->input('uptime');
echo $this->Form->end('Save Post');
?>