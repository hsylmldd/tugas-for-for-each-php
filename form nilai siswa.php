<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Student Database Advance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 40px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 48%;
        }
        button.submit-btn {
            background-color: #4CAF50;
            color: white;
        }
        button.cancel-btn {
            background-color: #f44336;
            color: white;
        }
        .result {
            margin-top: 30px;
            background-color: #e7f4e4;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #d4edda;
        }
    </style>
</head>
<body>

<h1>Nilai Student Database Advance</h1>

<div class="form-container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>
        </div>

        <div class="form-group">
            <label for="nilai_tugas">Nilai Tugas:</label>
            <input type="number" id="nilai_tugas" name="nilai_tugas" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="nilai_project">Nilai Project:</label>
            <input type="number" id="nilai_project" name="nilai_project" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="nilai_mt">Nilai MT (Mid-Term):</label>
            <input type="number" id="nilai_mt" name="nilai_mt" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label for="absensi">Absensi (%):</label>
            <input type="number" id="absensi" name="absensi" min="0" max="100" required>
        </div>

        <div class="button-group">
            <button type="submit" class="submit-btn">Submit</button>
            <button type="reset" class="cancel-btn">Cancel</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_project = $_POST['nilai_project'];
        $nilai_mt = $_POST['nilai_mt'];
        $absensi = $_POST['absensi'];

        // Menghitung total nilai
        $total_nilai = ($nilai_tugas * 0.30) + ($nilai_project * 0.50) + ($nilai_mt * 0.20);

        // Menentukan keterangan LULUS atau TIDAK LULUS
        if ($total_nilai > 75 && $absensi > 75) {
            $keterangan = "LULUS";
        } else {
            $keterangan = "TIDAK LULUS";
        }

        // Menampilkan hasil
        echo "<div class='result'>";
        echo "<h3>Hasil:</h3>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Kelas: " . htmlspecialchars($kelas) . "<br>";
        echo "Total Nilai: " . round($total_nilai, 2) . "<br>";
        echo "Keterangan: " . $keterangan;
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
