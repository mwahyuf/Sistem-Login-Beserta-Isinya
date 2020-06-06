<?php

    $anime = [["Nama Anime" => "Naruto Shippuden", "Tanggal Rilis Anime" => "15 Februari 2007", "Jumlah Episode" => "500 Episode", "Foto" => "naruto.jpeg"], 
    ["Nama Anime" => "One Piece", "Tanggal Rilis Anime" => "20 Oktober 1999", "Jumlah Episode" => "850 Episode", "Foto" => "op.jpeg"],
    ["Nama Anime" => "Bleach", "Tanggal Rilis Anime" => "5 Oktober 2004", "Jumlah Episode" => "366 Episode", "Foto" => "pemutih.jpeg"]];
?>

<!DOCTYPE html>
<html>

<head>
    <title> Selamat Datang Our Beloved Admin </title>

</head>

<body>
    
    <h1> Selamat Datang Lord Wahyu !!!</h1>

    <ul>
        <h3> Ini adalah nama - nama anime terbaik sepanjang masa yang bisa dilihat dibawah ini :</h3>

        <?php foreach($anime as $a){ ?> 
            <li>
            
                <a href="detail_daftar.php?nama= <?php echo $a["Nama Anime"]; ?> & 
                    rilis= <?php echo $a["Tanggal Rilis Anime"]; ?> & 
                    episode= <?php echo $a["Jumlah Episode"]; ?> &
                    foto= <?php echo $a["Foto"]; ?> ">  <?php echo $a["Nama Anime"]; ?>       </a>
                
         
            </li>


        <?php } ?>
      
    
    
    </ul>


    <form action="login_anime.php" method="post">
        <button type="logout" name="logout"> Keluar Dari Akun Admin </button>
    </form>

</body>

</html>