<?php
  //koneksi databases
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "sma";

  $koneksi = mysqli_connect($server, $user, $pass, $database) or die (mysqli_error($koneksi));

//simpan inputan 
  if(isset($_POST['bsimpan'])) 
  {

      //simpan baru
    if ($_GET['hal'] == "edit") 
      {
      //maka data aka di edit 
        $edit = mysqli_query($koneksi, "UPDATE muridsma set 
                                              NIS = '$_POST[tNIS]',
                                              Nama = '$_POST[tNama]',
                                              Alamat = '$_POST[tAlamat]',
                                              Kelas = '$_POST[tKelas]'
                                              WHERE id_murid = '$_GET[id]'
                                                             ");
   
                    if($edit)
                      {
                         echo "<script>
                              alert('Edit data suksess!');
                              document.location='pemilihan.php';
                              </script>";
                      }
                        else 
                        { 
                        echo "<script>
                              alert('Edit data GAGAL!');
                              document.location='form.php';
                              </script>";
                        }
      }

  

      else 
      {
        //simpan baru
       
        $simpan = mysqli_query($koneksi, "INSERT INTO muridsma (NIS, Nama, Alamat, Kelas) 
                                      VALUES('$_POST[tNIS]      ',
                                             '$_POST[tNama]     ',
                                             '$_POST[tAlamat]   ',
                                             '$_POST[tKelas]   ')
                                                              ");
              if($simpan)
                {
                  echo "<script>
                        alert('Simpan data suksess!');
                        document.location='pemilihan.php';
                        </script>";
                }
                else 
                {
                  echo "<script>
                        alert('Simpan data GAGAL!');
                        document.location='form.php';
                        </script>";
                }
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>form </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
    body {
      background-image: url('https://i.postimg.cc/VvKfyP8Y/halaman-sekolah2.png');}
  </style>  
</head>
<body>
 
<div class="container">
  
<h1 class="text-center text-white"> Brian Hakim </h1>
<h2 class="text-center text-white">19.01.53.0105</h2>

<!-- Awal Cards Form -->
<div class="card mt-3"> <!-- mt-3 adalah jarak antara tabel dan judul -->
  <div class="card-header bg-primary text-white"> <!-- warna background & text -->
    Silahkan input data diri anda disini
  </div>
  <div class="card-body">
   <form method="post" action="" >

   <div class="form-group">
    <label>NIS</label>
    <input type="text" name="tNIS" value="<?=@$vNIS?>" class="form-control" placeholder="Input Nomor Induk Siswa anda disini" required>
   </div>

    <div class="form-group">
    <label>Nama </label>
    <input type="text" name="tNama" value="<?=@$vNama?>" class="form-control" placeholder="Input Nama anda disini" required>
   </div>

    <div class="form-group">
    <label>Alamat </label>
    <textarea class="form-control" name="tAlamat" placeholder="Input alamat anda disini!"><?=@$vAlamat?></textarea>
   </div>

 <div class="form-group">
    <label>Kelas </label>  
   <select name="tKelas" class="form-control"> 
    <option value="<?=@$vKelas?>"><?=@$vKelas?></option>
<option value="X MIPA 1">X MIPA 1</option>
				<option value="X MIPA 2">X MIPA 2</option>
				<option value="X MIPA 3">X MIPA 3</option>
				<option value="X MIPA 4">X MIPA 4</option>
				<option value="X MIPA 5">X MIPA 5</option>
				<option value="X IPS 1">X IPS 1</option>
				<option value="X IPS 2">X IPS 2</option>
				<option value="X IPS 3">X IPS 3</option>
				<option value="X IPS 4">X IPS 4</option>

				<option value="<?=@$vkelas?>"></option>
				<option value="XI  MIPA 1">XI  MIPA 1</option>
				<option value="XI  MIPA 2">XI  MIPA 2</option>
				<option value="XI  MIPA 3">XI  MIPA 3</option>
				<option value="XI  MIPA 4">XI  MIPA 4</option>
				<option value="XI  MIPA 5">XI  MIPA 5</option>
				<option value="XI  IPS 1">XI  IPS 1</option>
				<option value="XI  IPS 2">XI  IPS 2</option>
				<option value="XI  IPS 3">XI  IPS 3</option>
				<option value="XI  IPS 4">XI  IPS 4</option>

				<option value="<?=@$vkelas?>"></option>
				<option value="XII  MIPA 1">XII  MIPA 1</option>
				<option value="XII  MIPA 2">XII  MIPA 2</option>
				<option value="XII  MIPA 3">XII  IMIPA 3</option>
				<option value="XII  MIPA 4">XII  MIPA 4</option>
				<option value="XII  MIPA 5">XII  MIPA 5</option>
				<option value="XII  IPS 1">XII  IPS 1</option>
				<option value="XII  IPS 2">XII  IPS 2</option>
				<option value="XII  IPS 3">XII  IPS 3</option>
				<option value="XII  IPS 4">XII  IPS 4</option>
   </select >
   </div>
<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
</form>

  </div>
</div>

<!-- Akhir Cards Form -->






<!-- Akhir Cards Table -->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>