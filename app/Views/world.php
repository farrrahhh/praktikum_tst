<!-- APPPATH/Views/world.php -->
<b>World Data</b>
<p>Data World Summary</p>

<?php if (!empty($world) && is_array($world)): ?>
    <table>
        <tr>
            <th>Country</th>
            <th>Continent</th>
            <th>Region</th>
            <th>Population</th>
            <th>GNP</th> <!-- Using GNP instead of GDP -->
        </tr>
        <?php foreach ($world as $world_item): ?>
            <tr>
                <td><?= esc($world_item['Name']) ?></td> <!-- Changed 'CountryName' to 'Name' -->
                <td><?= esc($world_item['Continent']) ?></td>
                <td><?= esc($world_item['Region']) ?></td>
                <td><?= esc($world_item['Population']) ?></td>
                <td><?= esc($world_item['GNP']) ?></td> <!-- Changed 'GDP' to 'GNP' -->
            </tr>
        <?php endforeach ?>
    </table>
<?php else: ?>
    <h3>No Data</h3>
    <p>Unable to find any data for you.</p>
<?php endif ?>
