<?php
//For **
 $row_num=2;
    for ($i = 0; $i<=$row_num; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }

        echo "<br>";
    }
?>

<?php
//For 123
 $row_num=3;
    for ($i =$row_num; $i>=1; $i--)
    {
        for($j = 1; $j<=$i; $j++ )
        {
            echo "$j";
        }

        echo "<br>";
    }
?>

<?php
//For Alphabet ABCD
 function alpha($a)
 {

    $limit = range('A','Z');
    $total = 0;

 for($i =0; $i<=$n; $i++)
  {
    for($j =0; $j<=$i; $j++)
    {
        echo $limit[$total]." ";
        $total =$total +1;
    }
    echo "<br>";
 }
}
   $a=3;
  alpha($a);
?>




