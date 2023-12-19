<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp4 order by id desc");

$data = mysqli_fetch_array($sql);

$baterai4 = $data['baterai4'];

if ($baterai4 == "") $baterai4 = 0;

echo $baterai4;
