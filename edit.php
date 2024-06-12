<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama_tas= $_POST['nama_tas'];
    $merek = $_POST['merek'];
    $harga= $_POST['harga'];
    $tahun = $_POST['tahun'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE koleksi SET nama_tas='$nama_tas',merek='$merek',harga='$harga',tahun='$tahun' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index1.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM koleksi WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_tas = $user_data['nama_tas'];
    $merek = $user_data['merek'];
    $harga= $user_data['harga'];
    $tahun = $user_data['tahun'];
}
?>
<html>
<head>
    <title>Edit User Data</title>
</head>

<body>
<a href="index1.php">Home</a>
<br/><br/>

<form name="update_user" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Nama Tas</td>
            <td><input type="text" name="nama_tas" value=<?php echo $nama_tas;?>></td>
        </tr>
        <tr>
            <td>Merek</td>
            <td>
                <input type="checkbox" name="merek" value="Hermes"<?php echo $merek;?>>Hermes<br>
                <input type="checkbox" name="merek" value="Louis Vuitton"<?php echo $merek;?>>Louis Vuitton<br>
                <input type="checkbox" name="merek" value="Dior"<?php echo $merek;?>>Dior<br>
                <input type="checkbox" name="merek" value="Gucci"<?php echo $merek;?>>Gucci<br>
                <input type="checkbox" name="merek" value="Balenciaga"<?php echo $merek;?>>Balenciaga<br>
                <input type="checkbox" name="merek" value="Coach"<?php echo $merek;?>>Coach<br>
                <input type="checkbox" name="merek" value="Tory Burch"<?php echo $merek;?>>Tory Burch<br>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
        </tr>
        <tr>
            <td>Tahun Launching</td>
            <td><input type="text" name="tahun" value=<?php echo $tahun;?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>