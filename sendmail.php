<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $description = $_POST['description'];
  $to = 'tjweigle42@gmail.com';
  $subject = 'New Job Request';
  $