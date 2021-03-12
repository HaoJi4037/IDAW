<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            echo 'Timestamp actuel : ' .time(). '<br>';
            $stt = strtotime('2019-01-25');
            echo 'Timestamp 25 janvier 2019 minuit (GMT+1) : ' .$stt. '<br>';
            
            echo '<pre>';
            print_r(getdate());
            echo '</pre><br>';
            
            echo '<pre>';
            print_r(getdate($stt));
            echo '</pre>';
        ?>
        <p>Un paragraphe</p>
    </body>
</html>