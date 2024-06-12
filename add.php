<html>
<head>
    <title>Add Alat</title>
</head>

<body>
<a href="index1.php">Go to Home</a>
<br/><br/>

<form action="add.php" method="post" name="form1">
    <table width="50%" border="0">
        <tr>
            <td>Nama Tas</td>
            <td><input type="text" name="nama_tas"></td>
        </tr>
            <td>Merek</td>
            <td>
                <input type="radio" name="merek" value="Hermes" > Hermes <br>
                <input type="radio" name="merek" value="Louis Vuitton" > Louis Vuitton<br>
                <input type="radio" name="merek" value="Dior" > Dior<br>
                <input type="radio" name="merek" value="Gucci" > Gucci<br>
                <input type="radio" name="merek" value="Balenciaga" > Balenciaga<br>
                <input type="radio" name="merek" value="Coach" > Coach<br>
                <input type="radio" name="merek" value="Tory Burch" > Tory Burch<br>
            </td>
        </tr>
        <tr>
            <td>Tipe Tas</td>
            <td>
            <select name="tipe">
                <option value="1">==={ Pilih Tipe Tas }===</option>
                <option value="Waist Bag">Waist Bag</option>
                <option value="Envelope Bag">Envelope Bag</option>
                <option value="Messenger Bag">Messenger Bag</option>
                <option value="Shoulder Bag">Shoulder Bag</option>
                <option value="Minaudiere Bag">Minaudiere Bag</option>
                <option value="Totebag">Totebag</option>
                <option value="Flap Bag">Flap Bag</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga">US$</td>
        </tr>
        <tr>
            <td>Tahun Launching</td>
            <td><input type="text" name="tahun"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>
                <input type="radio" name="stok" value="Tersedia(+20)" >Tersedia(+20)<br>
                <input type="radio" name="stok" value="Terbatas(-20)" >Terbatas(-20)<br>
                <input type="radio" name="stok" value="Habis" >Habis<br>
            </td>
        </tr>
        <tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>

<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama_tas= $_POST['nama_tas'];
    $merek = $_POST['merek'];
    $tipe = $_POST['tipe'];
    $harga= $_POST['harga'];
    $tahun = $_POST['tahun'];
    $stok= $_POST['stok'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO koleksi(nama_tas,merek,tipe,harga,tahun,stok) VALUES('$nama_tas','$merek','$tipe','$harga','$tahun','$stok')");

    // Show message when user added
    echo "User added successfully. <a href='index1.php'>View Collection</a>";
}
?>
</body>
</html>