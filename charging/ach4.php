<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp4 order by id desc");

$data = mysqli_fetch_array($sql);

$ach4 = $data['ach4'];

if ($ach4 == "") $ach4 = 0;

echo $ach4;
