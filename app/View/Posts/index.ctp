<h1>記事一覧</h1>

<ul>
	<?php foreach ($posts as $post): ?>
		<li>
			<?php
			// debug($post);
			// echo($post['Post']['title']);
			echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']);
			?>
			<?php echo $this->Html->link('編集', array('action'=>'edit', $post['Post']['id'])); ?>
		</li>
	<?php endforeach ?>
</ul>

<h2>Add Post</h2>
<?php echo $this->Html->link('Add post',array('controller'=>'posts', 'action'=>'add')); ?>