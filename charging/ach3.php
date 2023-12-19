<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp4 order by id desc");

$data = mysqli_fetch_array($sql);

$ach3 = $data['ach3'];

if ($ach3 == "") $ach3 = 0;

echo $ach3;
