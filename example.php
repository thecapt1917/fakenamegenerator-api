<?php
  $response = file_get_contents('https://api.stpn.xyz/fakenamegenerator/?nameset=br&country=us');
  $data = json_decode($response);
  $name = $data['profile']['name'];
  echo $name; // 'Kaua Alves Almeida'
<?
