<?php
  require_once 'connection.php';
  class User
  {
    private $id, $name, $username, $password, $phone, $email, $gender;

    public function setID($id)
    {
      $this->id = $id;
    }

    public function getID()
    {
      return $this->id;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function getName()
    {
      return $this->name;
    }

    public function setUsername($username)
    {
      $this->username = $username;
    }

    public function getUsername()
    {
      return $this->username;
    }

    public function setPassword($password)
    {
      $this->password = $password;
    }

    public function getPassword()
    {
      return $this->password;
    }

    public function setPhone($phone)
    {
      $this->phone = $phone;
    }

    public function getPhone()
    {
      return $this->phone;
    }

    public function setEmail($email)
    {
      $this->email = $email;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function setGender($gender)
    {
      $this->gender = $gender;
    }

    public function getGender()
    {
      return $this->gender;
    }
  }
?>
