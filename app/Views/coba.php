<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Data Coba</title>
</head>
<body>
    <div class="container">
        <h1>Input Data Keterangan</h1>
        
        <!-- Form untuk input data baru -->
        <form action="<?= base_url('/coba/inputDataCoba') ?>" method="POST">
            <label for="keterangan">Keterangan:</label>
            <input type="text" id="keterangan" name="keterangan" value="<?= old('keterangan') ?>" required>
            <button type="submit">Submit</button>
        </form>

        <h2>Data Coba</h2>
        <?php if (!empty($coba) && is_array($coba)): ?>
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Select for Update</th>
                        <th>Select for Delete</th>
                        <th>Id Coba</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($coba as $coba_item): ?>
                        <tr>
                            <td>
                                <input type="checkbox" name="ids[]" value="<?= esc($coba_item['id_coba']) ?>" form="updateForm" class="checkbox">
                            </td>
                            <td>
                            <input type="checkbox" name="ids[]" value="<?= esc($coba_item['id_coba']) ?>" form="deleteForm" class="checkbox">
                            </td>
                            <td><?= esc($coba_item['id_coba']) ?></td>
                            <td><?= esc($coba_item['keterangan']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Form untuk update -->
            <form id="updateForm" action="<?= base_url('/coba/updateDataCoba') ?>" method="POST">
                <label for="updateValue">Nilai Update:</label>
                <input type="text" id="updateValue" name="updateValue" required>
                <button type="submit">Update</button>
            </form>

            <!-- Form untuk delete -->
            <form id="deleteForm" action="<?= base_url('/coba/deleteDataCoba') ?>" method="POST">
                <button type="submit">Delete</button>
            </form>
        <?php else: ?>
            <h3>No Data</h3>
            <p>Unable to find any data for you.</p>
        <?php endif; ?>
    </div>
</body>
</html>
