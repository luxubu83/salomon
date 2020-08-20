<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DocuMy Movie Site</title>
</head>
<body>
    <?php 
    define ("FAVMOVIE", "The Life of Brian");
    echo "my fav movie is ";
    echo FAVMOVIE ;
    $FAVMOVIE ="Titanic";
    echo "<br>"." Your fav movie is " .$FAVMOVIE."<br>";
        ?>
        <h1> EM HỌC LÀM TOÁN </h1>
        <?php 
        $a=1;
        $b=2;
        $c=$a+$b;
        $d=$a-$b;
        $e=$a*$b;
        $f=$a/$b;
        $g=$a%$b;
        $h=floor($f);
        $av=$c/2;
        echo "a = ".$a."<br>";
        echo "b = ".$b."<br>";
        echo "a + b = ".$c."<br>";
        echo "a - b = ".$d."<br>";
        echo "a*b = ".$e."<br>";
        echo "a/b = ".$f."<br>";
        echo "a%b= $g <br>";
        echo "average = $av";
        ?>
        <h1>CÁC SỐ CHIA HẾT CHO 7</h1>
        <?php 
        for ($i=1; $i<101; $i++) 
        {
            if (($i%7)==0)
            {echo "$i ";}
            
        }

        ?>
        <h1> Bài tập table </h1>
        <table width="100%" border="1" cellpadding="5" cellspacing="0">
        <?php
        $row=4;
        $col=5;
        for ($i=1;$i<=$row;$i++)
        {
            echo "<tr>";
            for ($j=1;$j<=$col;$j++)
            {
                echo "<td> Row $i, Col $j </td>";
            }
            echo "<tr>";
        }
        ?>
        </table>
</body>
</html>