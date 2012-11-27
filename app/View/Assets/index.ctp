<h1>Assets</h1>

<?php echo $this->Html->link('Add Asset', array('controller' => 'assets', 'action' => 'add')); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Type</th>
        <th>Tag</th>
        <th>Name</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($assets as $asset): ?>
        <tr>
            <td><?php echo $asset['Asset']['id']; ?></td>
            <td><?php echo $asset['AssetsType']['name']; ?></td>
            <td><?php echo $asset['Asset']['tag']; ?></td>
            <td>
                <?php echo $this->Html->link($asset['Asset']['name'], array('controller' => 'assets', 'action' => 'view', $asset['Asset']['id']));
                ?>
            </td>
            <td><?php echo $asset['Asset']['created']; ?></td>
            <td><?php echo $asset['Asset']['modified']; ?></td>
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $asset['Asset']['id'])); ?></td>
        </tr>
    <?php endforeach; ?>

</table>