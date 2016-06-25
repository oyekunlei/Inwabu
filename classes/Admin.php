<?php
  class Admin
  {
    private $id, $fk_business_id, $username, $password, $active, $date;

    public function setID($id)
    {
      $this->id = $id;
    }

    public function getID()
    {
      return $this->id;
    }

    public function setBusinessID($fk_business_id)
    {
      $this->fk_business_id = $fk_business_id;
    }

    public function getBusinessID()
    {
      return $this->fk_business_id;
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

    public function setActive($active)
    {
      $this->active = $active;
    }

    public function getActive()
    {
      return $this->active;
    }

    public function setDate($date)
    {
      $this->date = $date;
    }

    public function getDate()
    {
      return $this->date;
    }
  }
?>
