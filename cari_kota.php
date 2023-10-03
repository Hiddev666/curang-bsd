<?php

include('config.php');

$sel_prov = "SELECT * FROM kota where id_prov='" . $_POST['prov'] . "';";
$q = mysqli_query($conn, $sel_prov);

while($data_prov = mysqli_fetch_array($q)) {
?>

<option value="<?php echo $data_prov['id_kota']?>"><?php echo $data_prov['nm_kota']?></option><br>

<?php }?>