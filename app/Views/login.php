<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.3rem;
            font-size: 0.9rem;
            color: #555;
        }

        input {
            width: 25%;
            padding: 0.6rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        button {
            width: 25%;
            padding: 0.6rem;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .error {
            color: red;
            text-align: center;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <!-- Menampilkan pesan error jika ada -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="/loginUser" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <!-- Password tidak disembunyikan -->
                <input type="text" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
