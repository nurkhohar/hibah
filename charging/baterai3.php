<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp4 order by id desc");

$data = mysqli_fetch_array($sql);

$baterai3 = $data['baterai3'];

if ($baterai3 == "") $baterai3 = 0;

echo $baterai3;
