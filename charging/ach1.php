<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp3 order by id desc");

$data = mysqli_fetch_array($sql);

$ach1 = $data['ach1'];

if ($ach1 == "") $ach1 = 0;

echo $ach1;
