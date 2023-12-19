<?php
$con = mysqli_connect("localhost", "root", "", "hibahmagetan");

$sql = mysqli_query($con, "select * from esp3 order by id desc");

$data = mysqli_fetch_array($sql);

$vch2 = $data['vch2'];

if ($vch2 == "") $vch2 = 0;

echo $vch2;
