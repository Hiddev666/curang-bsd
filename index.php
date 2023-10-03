<?php require('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSD COMBO BOX</title>
</head>

<body>

    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>

    <?php


    $query1 = "SELECT * FROM provinsi;";
    $sql1 = mysqli_query($conn, $query1);
    
    $query2 = "SELECT * FROM kota;";
    $sql2 = mysqli_query($conn, $query2);

    ?>

    <p>Provinsi</p><select name="provinsi" id="provinsi">
        <?php
        while ($row = mysqli_fetch_array($sql1)) {
            ?>

            <option value="<?php echo $row['id_prov']?>"><?php echo $row['nm_prov']?></option>

        <?php } ?>
    </select>

    <p>Kota</p>
    <select name="kota" id="kota">
        
    </select>

    <script>

        $("#provinsi").change(function() {
            var id_provinsi = $("#provinsi").val();

            console.log(id_provinsi)

            $.ajax({
                type: "POST",
                dataType: "html",
                url: "cari_kota.php",
                data: "prov=" + id_provinsi,
                success:function(msg) {
                    if(msg == '') {
                        alert('Tidak ada data kota');
                    } else {
                        $("#kota").html(msg);
                    }
                }
            });

        });
    </script>

</body>

</html>