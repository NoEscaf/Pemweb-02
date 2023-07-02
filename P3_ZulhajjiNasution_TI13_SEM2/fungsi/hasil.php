<?php

    //jika belum mengisi form maka tidak dapat pergi ke halaman hasil
    if( !isset($_POST['submit']) ){
        header("Location: index.php");
        exit;
    }



    //menyimpan inmputan user kedalam variable
    $nama = $_POST['nama'];
    $matkul = $_POST['matakuliah'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];


    // menentukan nilai akhir

    $nilai_akhir = ($uts + $uas + $tugas) / 3;


    // mengambil sekaligus menjalankan skrip yang ada di library fungsi
    require_once 'libfungsi.php';
    $nilai = $nilai_akhir;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NOMOR</th>
      <th scope="col">NAMA</th>
      <th scope="col">MATKUL</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      <th scope="col">GRADE</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
            <td> 1 </td>
            <td> <?= $nama        ?> </td>
            <td> <?= $matkul            ?> </td>
            <td> <?= $uts               ?> </td>
            <td> <?= $uas               ?> </td>
            <td> <?= $tugas             ?> </td>
            <td> <?= number_format($nilai_akhir, 2,',',',')      ?> </td>
            <td> <?= grade($nilai)      ?> </td>
            <td> <?= kelulusan($nilai)  ?> </td>
    </tr>
  </tbody>
</table>
</body>
</html>