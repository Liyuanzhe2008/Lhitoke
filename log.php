<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel='stylesheet' type='text/css' href='https://www.lihouse.xyz/wp-content/themes/style.css?ver=2.0.4'>
     <title>提交一言</title>
 </head>
<body>
<div class="pattern-center ">
    <div class="pattern-attachment-img" style="background-image: url(https://www.lihouse.xyz/bing.php)"> </div>
    <header class="pattern-header "><h1 class="entry-title">提交一言</h1></header>
  </div>
<div id="phone" style="
 "><br></br>
<div style="text-align: center;">
<form action="" method="post" name="loghitoke">一言提交:<input name="hitoke" type="text" value="" /> <input type="submit" value="提交" /></form></div>
<h3 style="text-align: center;">提交的一言是储存在 hitokeby.txt 中，审核过后请一行一行添加到 hitokedate.date 中！</h3>
<h3 style="text-align: center;">感谢原作者孟坤</h3>
</div>
<?php
$filename="hitokeby.txt";
$handle=fopen($filename,"a+");
$str=fwrite($handle,"\n");
$str=fwrite($handle,$_POST['hitoke']);
fclose($handle);

