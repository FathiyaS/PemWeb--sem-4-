<style type="text/css">
    .header{
        background-color: pink;
    }
    .body{
        font-family: 'Lucida Handwriting' ;
        text-align : center;
        font-weight : bold;
        color: magenta ;

    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM koleksi ORDER BY id ASC");
?>

<html>
<head>
    <title>TAS</title>
</head>

<body>
<h2 class="body"><strong>BAG BRANDED COLLECTION</strong><h2>
<a href="add.php">Tambah koleksi</a><br/><br/>

<table width='80%' border=1>

    <tr class="header">
        <th>No</th><th>Nama Tas</th><th>Merek</th><th>Tipe Tas</th><th>Harga($)</th><th>Tahun Launching</th><th>Stok</th><th>Update Produk</th>
    </tr>
    <?php
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$user_data['nama_tas']."</td>";
        echo "<td>".$user_data['merek']."</td>";
        echo "<td>".$user_data['tipe']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['tahun']."</td>";
        echo "<td>".$user_data['stok']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        $i++;
    }
    ?>
</table>
</body>

</html>