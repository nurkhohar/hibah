<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp4 order by id desc");

$data = mysqli_fetch_array($sql);

$vch4 = $data['vch4'];

if ($vch4 == "") $vch4 = 0;

echo $vch4;
