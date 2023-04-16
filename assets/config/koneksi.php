<?php
// panggil fungsi validasi xss dan injection
require_once('fungsi_validasi.php');

$request = $_SERVER['REQUEST_URI'];

$db['host'] = "localhost"; //host
$db['user'] = "root"; //username database
$db['pass'] = ""; //password database
$db['name'] = "itemmasters_update"; //nama database

$koneksi = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);
// buat variabel untuk validasi dari file fungsi_validasi.php
$val = new kenway;

function anti_injection($data)
{
  global $koneksi;
  $filter = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
  return $filter;
}
