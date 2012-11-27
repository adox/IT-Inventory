<h1>Companies</h1>

<?php echo $this->Html->link('Add Company', array('controller' => 'companies', 'action' => 'add')); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Tag Prefix</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($companies as $company): ?>
        <tr>
            <td><?php echo $company['Company']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($company['Company']['name'], array('controller' => 'companies', 'action' => 'select', $company['Company']['id']));
                ?>
            </td>
            <td><?php echo $company['Company']['tag_prefix']; ?></td>
            <td><?php echo $company['Company']['created']; ?></td>
            <td><?php echo $company['Company']['modified']; ?></td>
            <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $company['Company']['id'])); ?></td>
        </tr>
    <?php endforeach; ?>

</table>