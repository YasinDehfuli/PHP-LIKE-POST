<?php
$LikeCount = file_get_contents('like1');
if ($_GET['action']== 'like1')
{
    $LikeCount++;
}
file_put_contents('like1',$LikeCount);


$LikeCount = file_get_contents('like2');
if ($_GET['action']== 'like2')
{
    $LikeCount++;
}
file_put_contents('like2',$LikeCount);


$LikeCount = file_get_contents('like3');
if ($_GET['action']== 'like3')
{
    $LikeCount++;
}
file_put_contents('like3',$LikeCount);


$LikeCount = file_get_contents('like4');
if ($_GET['action']== 'like4')
{
    $LikeCount++;
}
file_put_contents('like4',$LikeCount);



$LikeCount = file_get_contents('like5');
if ($_GET['action']== 'like5')
{
    $LikeCount++;
}
file_put_contents('like5',$LikeCount);


?>
