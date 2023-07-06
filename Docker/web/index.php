<!DOCTYPE html>
<html>
<head>
    <title>Praktikum docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Selamat datang!</h1>

    <?php
    // Mendapatkan waktu saat ini
    $tanggal = date("d M Y");
    $jam = date("H:i:s");

    // Menampilkan pesan dengan waktu saat ini
    echo "<p>Hari ini tanggal $tanggal</p>";
    echo "<p>Pukul $jam</p>";
    ?>

    <h2>Data Pengguna</h2>

    <?php
    // Simulasi data pengguna
    $pengguna = array(
        array('Nama' => 'Kanha Wiswambara', 'NIM' => 2115101043, 'Kelas' => 'IKI'),
        array('Nama' => 'Andreas Stiady', 'NIM' => 2115101025, 'Kelas' => 'IKI'),
        array('Nama' => 'Alex  Nugrogo', 'NIM' => 2115101023, 'Kelas' => '???')
    );

    // Menampilkan data pengguna dalam tabel
    echo "<table>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Kelas</th></tr>";
    foreach ($pengguna as $data) {
        echo "<tr>";
        echo "<td>" . $data['Nama'] . "</td>";
        echo "<td>" . $data['NIM'] . "</td>";
        echo "<td>" . $data['Kelas'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
