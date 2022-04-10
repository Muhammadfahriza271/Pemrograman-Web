<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
    <h2 style="text-align:center">Bank Ini</h2>
<body>
<div class="content">
  <div class="container">
    <div class="row">
      <div class="container-fluid">
        <table class="table text-center table-bordered table-light table-striped table-hover w-100 m-auto mt-3"">
        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">No. Account</th>
          <th scope="col">Nama Pemilik</th>
          <th scope="col">Saldo</th>
      </tr>
<?php
include_once "class_account.php";
$customer1 = new AccountBank('C001', 6000000, 'Ahmad');
$customer2 = new AccountBank('C002', 5350000, 'Budi');
$customer3 =  new AccountBank('C003', 2500000, 'Kurniawan');
$ar_account = [$customer1, $customer2, $customer3];

$nomor = 1;
foreach($ar_account as $obj){
?>
 <tr>
  <td><?= $nomor?></td>
  <td><?=$obj->nomor?></td>
  <td><?=$obj->customer?></td>
  <td><?=$obj->getSaldo()?></td>
  </tr>
  <?php
  $nomor++;
  }
  ?>


  </thead>
  <tbody>
  <?php

$customer1->deposit(1000000);
echo 'Ahmad Nabung 1.000.000 <br/>';
$customer1->cetak();

$customer2->withdraw(2500000);
echo '<br/><br/>Budi tarik uang 2.500.000 <br/>';
$customer2->cetak();

?>
  </tbody>
</table>
</body>
</html>
