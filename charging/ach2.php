<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp3 order by id desc");

$data = mysqli_fetch_array($sql);

$ach2 = $data['ach2'];

if ($ach2 == "") $ach2 = 0;

echo $ach2;
