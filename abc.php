<?php
for($i=1; $i<6; $i++)
{
    for($j=1; $j<$i; $j++)
    {
        if($j % 2== 0)
        {
            echo "#";
        }
        echo "*";
    }
    echo "<br>";
}


?>