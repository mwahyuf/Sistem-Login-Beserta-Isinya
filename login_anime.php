<?php
        if( isset($_POST["submit"])) { 
            if( $_POST["username"] == "wahyukun" || $_POST["password"] == "awokwok"){
                
                header("location: berhasil_anime.php");
                exit;

            } else {
                $error = true;
            }
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title style="color: palevioletred;"> Login Admin </title>
</head>

<body>
    
    <h1> Anda harus melakukan login terlebih dahulu </h1>


    <ul>
    
        <form action="" method="POST" >

            <li style="color: red;">
                <label for="username"> Username Anda : </label>
                <input type="text" name="username" id="username" style="background-color: blue; color: white;">
            </li>

            <li style="color: red;">
                <label for="password"> Password Anda : </label>
                <input type="password" name="password" id="password" style="background-color: blue; color: white;">
            </li>
        
            <li style="color: red;">
                <button type="submit" name="submit" style="background-color: brown; color: white;"> Submit </button>
            </li>
        
         </form>

        <?php if( isset($error) ){ ?>

            <p style="color: red;"> Agan salah memasukkan username maupun password, yukk ulang lagi !!!</p>

        <?php } ?>
    
    
    
    </ul>



</body>










</html>