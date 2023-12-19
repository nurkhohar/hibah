<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp4 order by id desc");

$data = mysqli_fetch_array($sql);

$vch3 = $data['vch3'];

if ($vch3 == "") $vch3 = 0;

echo $vch3;
