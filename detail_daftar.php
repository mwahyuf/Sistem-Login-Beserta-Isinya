<?php if( !isset($_GET["nama"]) || !isset($_GET["rilis"]) || !isset($_GET["episode"]) || !isset($_GET["foto"]) ){

        header("location: berhasil_anime.php");
        exit;
    }


?>

<!DOCTYPE html>
<html>

<head>
    <title> Detail Anime </title>
</head>

<body>
    
    <ul>
        
        <img src="img/ <?php echo $_GET["foto"]; ?> " >

        <li style="color: brown;">
            <?php echo $_GET["nama"]; ?>
        </li>

        <li style="color: brown;">
            <?php echo $_GET["rilis"]; ?>
        </li>

        <li style="color: brown;">
            <?php echo $_GET["episode"]; ?>
        </li>

    
    </ul>


    <a href="berhasil_anime.php" style="color: blue;"> <---- Kembali ke halaman sebelumnya </a>




</body>







</html>