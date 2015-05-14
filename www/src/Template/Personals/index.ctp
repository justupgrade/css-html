<h1>Personals</h1>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Actions</th>
    </tr>
<?php foreach($personals as $personal): ?>
    <tr>
        <td><?= $personal->first_name ?></td>
        <td><?= $personal->last_name ?></td>
        <td>
            <?= $this->Html->link(__('Edit'), ['action'=>'edit', $personal->id]) ?>
        </td>
    </tr>
<?php endforeach; ?>
</table>