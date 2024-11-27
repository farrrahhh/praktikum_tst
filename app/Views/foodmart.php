<b>Customer Foodmart</b> 
<p>Data Customer Foodmart</p>

<?php if (!empty($foodmart) && is_array($foodmart)): ?>
    <table>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            
        </tr>
        <?php foreach ($foodmart as $user): ?>
        <tr>
            <td><?= esc($user['customer_id']) ?></td>
            <td><?= esc($user['fname']) ?></td>
            <td><?= esc($user['mi']) ?></td>
            <td><?= esc($user['lname']) ?></td>
            <td><?= esc($user['fullname']) ?></td>
            
        </tr>
        <?php endforeach ?>
    </table>
<?php else: ?>
    <h3>No Data</h3>
    <p>Unable to find any data for you.</p>
<?php endif ?>
