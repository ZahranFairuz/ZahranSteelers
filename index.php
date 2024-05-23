<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rental Motor</title>
  <style>
body, h2, form, p {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  padding: 20px;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
  font-weight: bold;
  color: #555;
}

input[type="text"],
input[type="number"],
select {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

button {
  cursor: pointer;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #5cb85c;
    color: white;
    font-size: 16px;
    transition: background-color 0.3s;
    margin-top: 10px;
}

button:hover {
  background-color: #218838;
}

a {
    text-decoration: none;
    color: white;
}

p {
  background: #e9ecef;
  padding: 10px;
  border-radius: 4px;
  color: #333;
  margin-top: 10px;
}

p span {
  font-weight: bold;
}
  </style>
</head>
<body>
<button type="submit" name="submit"><a href="halaman.html">Kembali</a></button>

  <div class="container">
    <h2>Rental Motor</h2>
    <form action="" method="post">
      <label for="nama">Nama Pelanggan                :</label>
      <input type="text" id="nama" name="nama" required>
      <br>
      <label for="waktuRental">Lama Waktu Rental per hari:</label>
      <input type="number" id="waktuRental" name="waktuRental" min="1" required>
      <br>
      <label for="jenis_motor">Jenis Motor:</label>
      <select name="jenis_motor" id="jenis_motor" required>
        <option hidden>Pilih Motor</option>
        <option value="Chooper">Chooper</option>
        <option value="Vespa">Vespa</option>
        <option value="Aerox">Aerox</option>
        <option value="Astrea">Astrea</option>
      </select>
      <br>
      <button type="submit" name="submit">Kirim</button>
    </form>
    
    <?php
    if(isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $waktuRental = $_POST['waktuRental'];
      $jenis_motor = $_POST['jenis_motor'];

      $harga_motor = [
        "Chooper" => 75000,
        "Vespa" => 150000,
        "Aerox" => 200000,
        "Astrea" => 1000000
      ];

      $pajak = 10000;


      $members = ["Zahran", "Fairuz", "Rahman"];
    
      $total_harga = $harga_motor[$jenis_motor] * $waktuRental;
 
      if(in_array($nama, $members)) {
        $diskon = $total_harga * 0.05;
        $total_harga -= $diskon;
      } if (in_array($nama, $members)) {
        echo "<p>$nama adalah anggota member.</p>";
    } else {
        echo "<p>$nama bukan anggota member.</p>";
    }
      

      $total_harga += $pajak;
      
      echo "<p>Nama : $nama</p>";
      echo "<p>Waktu Rental: $waktuRental hari</p>";
      echo "<p>Jenis Motor: $jenis_motor</p>";
      echo "<p>Harga Yang Harus di Bayar: Rp. " . number_format($total_harga, 2, ",", ".") . ". Dengan pajak 10 ribu sudah di tambahkan</p>";
    }
    ?>
  </div>
</body> 
</html>
</body>
</html>
