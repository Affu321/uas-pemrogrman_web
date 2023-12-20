<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Komentar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="comentar.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 60px; /* Padding for fixed navbar */
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        h3 {
            color: #28a745;
        }

        table {
            margin-top: 20px;
        }

        th, td {
            text-align: center;
        }

        .btn-primary, .btn-warning, .btn-danger {
            margin-right: 5px;
        }

        textarea {
            resize: vertical;
        }

        @media (max-width: 767px) {
            body {
                padding-top: 70px; /* Padding for fixed navbar */
            }
        }
    </style>
</head>
<body>

<nav class="container">
    <div class="wrapper">
      <div class="logo">
        <img src="nemplox.png" alt="">
      </div>
      <ul class="nav_2">
        <li><a href="home.php">Home</a></li>
        <li><a href="Popular.php">Popular</a></li>
        <li><a href="toprated.php">Top Rated</a></li>
        <li><a href="Upcoming.php">Upcoming</a></li>
        <li><a href="comentar.php">Comentar</a></li>
      </ul>
      </div>
    </div>
  </nav>

<div class="container mt-5">
    <h2>Comentar</h2>

    <!-- Formulir penambahan komentar -->
    <form action="aksi.php" method="post">
        <input type="hidden" name="action" value="tambah">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="komentar">Komentar:</label>
            <textarea class="form-control" id="komentar" name="komentar" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Komentar</button>
    </form>

    <?php
    // Sertakan file koneksi
    include 'koneksi.php';

    // Ambil semua komentar dari database
    $komentar = ambilSemuaKomentar();

    // Tampilkan data komentar
    echo "<h3 class='mt-4'>Daftar Komentar</h3>";
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>";

    foreach ($komentar as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>{$row['komentar']}</td>
                <td>
                    <a href='aksi.php?action=hapus&id={$row['id']}' class='btn btn-danger btn-sm'>Hapus</a>
                    <a href='Comentar.php?action=edit&id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                </td>
              </tr>";
    }

    echo "</tbody></table>";
    ?>

    <?php
    // Formulir update komentar
    if (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
        $id_update = $_GET['id'];
        $komentar_update = getKomentarById($id_update);

        if ($komentar_update) {
            $nama_update = $komentar_update['nama'];
            $email_update = $komentar_update['email'];
            ?>

            <h3 class="mt-4">Update Komentar</h3>
            <form action="aksi.php" method="post">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id_update" value="<?php echo $id_update; ?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_update; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email_update; ?>" required>
                </div>
                <div class="form-group">
                    <label for="komentar">Komentar:</label>
                    <textarea class="form-control" id="komentar" name="komentar" required><?php echo $komentar_update['komentar']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Perbarui Komentar</button>
            </form>

            <?php
        }
    }
    ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
