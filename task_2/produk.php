
<?php
    $produk = array(
        array(
            "id" => "1" , 
            "nama" => "sepatu" ,
            "gambar" => "https://cdn.elevenia.co.id/g/8/1/1/9/7/7/27811977_B.jpg" ,
            "harga" => "400.000" ,
        ) ,
        array(
            "id" => "2" , 
            "nama" => "celana" ,
            "gambar" => "http://store.pakaianfashionpria.com/3647-thickbox_default/celana-jeans-pria-cp174.jpg" ,
            "harga" => "150.000" ,
        ) ,
        array(
            "id" => "3" , 
            "nama" => "sendal" ,
            "gambar" => "https://s4.bukalapak.com/img/4422447112/w-1000/sendal_hiking_pria_catenzo_sendal_gunung_sendal_distro_senda.jpg" ,
            "harga" => "140.000" ,
        ) ,
    ) ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>belanja di toko mana</title>

    </head>
    <body>

        <center><h1>Pilihan Produk</h1></center>
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

        <form action="produk2.php" method="GET">
            <label for="nama-barang">Nama Barang :</label>
            <input type="text" name="nama-barang"> <br>
            <button type="submit">cari barang</button>
        </form>    

    <p>
        <style>
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
                padding: 30px;
            }
        </style>
   
        <p><center><h3>Rekomendasi Untuk Anda</h3></center><p>
    </p>
        
            <div class="gambar">
            
            <?php
                for($i = 0; $i < count($produk); $i++ ) {
            ?>
            <div class="desain-layout">
                <div  class="box">
                    <img width="200" src="<?php echo $produk[$i]["gambar"] ?>" alt="">
                    <div class="teks">
                    <h3><?= $produk[$i]["nama"] ?></h3>
                    <h4> Rp.<?= $produk[$i]["harga"] ?></h4>
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>

        

    </body>
</html>