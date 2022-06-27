<?php
    include 'request.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Link</title>
    <link rel="stylesheet" href="../main.css">
</head>
<body>
        <div class="description">

            <h2 class="description" align="center"> <a href="http://link" style="text-decoration: none; color: white;"> Сервис для сокращения ссылок</a></h1>
        </div>
        <div class="container">
        <div class="box">
                <form action="" method="GET">
                    <div class="button">
                        <input name="cut_link" type="text" value="<?=$_GET['cut_link'];?>" placeholder="Вставьте ссылку" style="height: 60px; width: 500px; border-radius: 7px; font-size : 20px;"/>
                    </div>
                    <div class="button">
                        <button type="submit" style="height: 65px; width: 180px; border-radius: 7px; background-color: #FFBF40; font-size : 20px; cursor: pointer;">Сократить</button>
                    </div>
                </form>
        </div>
        </div>
    
</body>
</html>