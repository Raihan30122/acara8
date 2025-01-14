<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Penduduk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"] {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Form Data Penduduk</h2>
    <form action="input.php" method="post">
        <label for="kecamatan">Kecamatan:</label>
        <input type="text" id="kecamatan" name="kecamatan" required>
        
        <label for="luas">Luas (m²):</label>
        <input type="text" id="luas" name="luas" required pattern="^[0-9]+(\.[0-9]+)?$" title="Masukkan angka yang valid. Contoh: 10.5">
        
        <label for="jumlah_penduduk">Jumlah Penduduk:</label>
        <input type="text" id="jumlah_penduduk" name="jumlah_penduduk" required pattern="^[0-9]+$" title="Masukkan angka bulat yang valid.">
        
        <label for="longitude">Bujur:</label>
        <input type="text" id="longitude" name="longitude" required pattern="^-?(180(\.0+)?|1[0-7][0-9](\.[0-9]+)?|[1-9]?[0-9](\.[0-9]+)?)$" title="Masukkan nilai longitude yang valid. Contoh: -73.935242">
        
        <label for="latitude">Lintang:</label>
        <input type="text" id="latitude" name="latitude" required pattern="^-?(90(\.0+)?|[1-8]?[0-9](\.[0-9]+)?)$" title="Masukkan nilai latitude yang valid. Contoh: 40.730610">
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
