<?php
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "sendal" ,
            "gambar" => "https://images-na.ssl-images-amazon.com/images/I/61Z9Lgg-sJL._UY695_.jpg" ,
            "harga" => "90.000,-" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "sepatu" ,
            "gambar" => "https://cdn.elevenia.co.id/g/3/8/7/8/9/7/16387897_A1.jpg" ,
            "harga" => "350.000,-" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "hoodie" ,
            "gambar" => "https://s3.amazonaws.com/images.ecwid.com/images/28762216/1698796866.jpg" ,
            "harga" => "180.000,-" ,
        ) ,
    ) ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Pencarian</title>
    </head>
    <style>
        h2 {
            color: rgb(0, 128, 119);
        }
        .box {
                border: 1px solid;
                
        }
        .desain-layout {
            width: 200px;
            margin: 20px;
            
        }
        .gambar {
            display: flex;
            
        }
        .teks {
            padding: 10px;
        }
    </style>
    <body>
        <center><h2>Detail Produk</h2></center>
        <h3>Berbagai barang mungkin ada</h3>
        <table border="1">
            <tr>
                <td>sepatu</td>
                <td>hoodie</td>
            </tr>
            <tr>
                <td>sendal</td>
                <td>celana</td>
            </tr>
        </table>

            <div class="gambar">

            <?php
                for($i = 0; $i < count($produk); $i++ ) {
            ?>
            <div class="desain-layout">
                <div  class="box">
                    <img width="200" src="<?php echo $produk[$i]["gambar"] ?>" alt="">
                    <div class="teks">
                    <tr><td><h3><?= $produk[$i]["nama"] ?></h3></td>
                    <td><h4> Rp.<?= $produk[$i]["harga"] ?></h4></td></tr>
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>

    </body>
</html>