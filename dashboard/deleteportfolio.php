<?php
session_start();
require_once 'lib/portfolio.php';

$proid = $_GET['proid'];


$res = deletePortfolio($proid);

if($res == 1){
  header('LOCATION:allportfolio.php');
}else{
  header('LOCATION:allportfolio.php');
}