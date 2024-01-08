<?php 
require_once(".config/database.php");

public function __construct(){
    $createConnection = new Connection();
    $db = $createConnection->connectDB();
    $this->connect = $db;
  }

