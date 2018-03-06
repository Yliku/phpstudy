<?php 
function rotationSort($row,$col)
{
    $k=1;
    $result = array();
    $small = $col < $row ? $col : $row;
    $count = ceil($small / 2);
    for($i=0; $i<$count; $i++)
    {
        $maxRight = $col-1-$i;//右边最大坐标
        $maxBottom = $row -1 -$i;//下面最大坐标
        for($j=$i; $j<=$maxRight; $j++)           //构造上边一条线  纵坐标最小,横坐标递增
        {
            $result[$i][$j] = $k++;
        }
        for($j=$i; $j<$maxBottom; $j++)           //构造右边一条线 纵坐标递增,横坐标最大
        {
            $result[$j+1][$maxRight] = $k++;
        }
        for($j=$maxRight-1;$j>=$i; $j--)          //构造下边一条线 纵坐标最大,横坐标递减
        {
            //if($result[$maxBottom][$j]) break;
            $result[$maxBottom][$j] = $k++;
        }
        for($j=$maxBottom-1;$j>$i;$j--)           //构造左边一条线 纵坐标递减,横坐标最小
        {
            //if($result[$j][$i]) break;
            $result[$j][$i] = $k++;
        }
    }
    return $result;
}
/*
function printArray($result,$row,$col)
{
    echo '<table border=1 style="width:500px;">';
    for($i=0;$i<$row;$i++)
    {
        echo '<tr>';
        for($j=0;$j<$col;$j++)
        {
            echo '<td style="padding: 50px;">'.$result[$i][$j].'</td>';
        }
        echo '<tr>';
    }
    echo '</table>';
}
$row = 5;
$col = 5;
$arr = rotationSort($row,$col);
printArray($arr,$row,$col);
*/
$a=rotationSort(5,5);
var_dump($a);

 ?>