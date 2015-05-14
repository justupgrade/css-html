<h1>Educations:</h1>
<table>
    <tr>
        <th>ID</th>
        <th>School</th>
        <th>Start</th>
        <th>Finish</th>
        <th>Actions</th>
    </tr>
<?php foreach($educations as $education): ?>
    <tr>
        <td><?= $education->id ?></td>
        <td><?= $education->name ?></td>
        <td><?= $education->start ?></td>
        <td><?= $education->finish ?></td>
        <td>
            <?= $this->Html->link(__('Edit'), ['action'=>'edit', $education->id]) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action'=>'delete', $education->id] ,
                ['confirm'=>__('Are you sure you want to delete #{0}?', $education->id)]
            )
            ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>