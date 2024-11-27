<p>Data Users</p>
<?php if (!empty($users) && is_array($users)): ?>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Customer ID</th>
            <th>Customer First Name</th>
            <th>Customer Middle Name</th>
            <th>Customer Last Name</th>
            <th>Customer Full Name</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['customer_id']) ?></td>
            <td><?= esc($user['customer_fname']) ?></td>
            <td><?= esc($user['mi']) ?></td>
            <td><?= esc($user['customer_lname']) ?></td>
            <td><?= esc($user['fullname']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <h3>No Data</h3>
    <p>Unable to find any data for you.</p>
<?php endif; ?>
