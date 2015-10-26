<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Connection
{

  protected $db;
  /*   * ** mysql_hostname* */
  protected $hostname;

  /*   * ** mysql_username* */
  protected $username;

  /*   * ** mysql_password* */
  protected $password;

  /*   * ** mysql_dbname* */
  protected $dbname;

  public function __construct()
    {
    $this->dbname = 'e_learning';
    $this->hostname = 'localhost';
    $this->password = 'don13';
    $this->username = 'e_learning';
    }

  public function connect()
    {

    try
      {
      $conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", "$this->username", "$this->password");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo 'connected';
     
      } catch (PDOException $e)
      {
      echo 'ERROR: ' . $e->getMessage();
      }
    $this->db = $conn;
    }

  public function getConnection()
    {
    $this->connect();
    return $this->db;
    }

}
