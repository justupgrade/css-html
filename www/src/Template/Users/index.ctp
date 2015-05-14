<?php
/**
 * Created by PhpStorm.
 * User: tomasz
 * Date: 13.05.15
 * Time: 15:17
 */
?>
<h1>Users</h1>
<table>
<?php foreach($users as $user): ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->email ?></td>
    </tr>
<?php endforeach; ?>
</table>