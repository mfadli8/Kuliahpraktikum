<!DOCTYPE html>
<html>
 <head>
  <title>Biodata</title>
 </head>

 <body>
 <?php
  $NIM=$_POST['NIM'];
  $Nama=$_POST['Nama'];
  $IPK=$_POST['IPK'];
  $yahun=$_POST['yahun'];
  $Bulan=$_POST['Bulan'];
  $jurusan=$_POST['jurusan'];
 ?>
 <table border="1" cellpadding="5" cellspacing="0">
  <tr>
     <td>NIM</td>
     <td> <?php echo $NIM ?> </td>
  </tr>
  <tr>
     <td>Nama Lengkap</td>
     <td> <?php echo $Nama ?> </td>
  </tr>
  <tr>
     <td>Lama Study</td>
     <td> <?php echo $yahun ?>Th,<?php echo $Bulan ?>Bl </td>
  </tr>
  <tr>
     <td>IPK Terakhir</td>
     <td> <?php echo $IPK ?> </td>
  </tr>
  <tr>
     <td>Jurusan</td>
     <td> <?php echo $jurusan ?> </td>
  </tr>
 </table>
 </body>
</html>