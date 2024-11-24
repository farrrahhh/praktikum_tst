<b>Store Foodmart</b> 
<p>Data Store Foodmart</p>

<?php if (!empty($foodmart) && is_array($foodmart)): ?>
    <table>
        <tr>
            <th>Store ID</th>
            <th>Store Name</th>
            <th>Store Type</th>
            <th>Region ID</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Manager</th>
            <th>Phone</th>
            <th>Opened Date</th>
        </tr>
        <?php foreach ($foodmart as $store): ?>
        <tr>
            <td><?= esc($store['store_id']) ?></td>
            <td><?= esc($store['store_name']) ?></td>
            <td><?= esc($store['store_type']) ?></td>
            <td><?= esc($store['region_id']) ?></td>
            <td><?= esc($store['store_city']) ?></td>
            <td><?= esc($store['store_state']) ?></td>
            <td><?= esc($store['store_country']) ?></td>
            <td><?= esc($store['store_manager']) ?></td>
            <td><?= esc($store['store_phone']) ?></td>
            <td><?= esc($store['first_opened_date']) ?></td>
        </tr>
        <?php endforeach ?>
    </table>
<?php else: ?>
    <h3>No Data</h3>
    <p>Unable to find any data for you.</p>
<?php endif ?>
