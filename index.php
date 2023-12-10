<?php
require "vendor/autoload.php";
use App\Controller\Validation;

$data = [
  'name'=>"sajjad"
];

$checking = new Validation();
var_dump($checking->check($data , 'name'));