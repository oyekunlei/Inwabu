<?php
  class Business
  {
    private $id, $name, $location, $website, $email, $logo, $phoneNumber;

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

    public function setLocation($location)
    {
      $this->location = $location;
    }

    public function getLocation()
    {
      return $this->location;
    }

    public function setWebsite($website)
    {
      $this->website = $website;
    }

    public function getWebsite()
    {
      return $this->website;
    }

    public function setEmail($email)
    {
      $this->email = $email;
    }

    public function getEmail()
    {
      return $this->email;
    }

    public function setLogo($logo)
    {
      $this->logo = $logo;
    }

    public function getLogo()
    {
      return $this->logo;
    }

    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
    }

    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }
  }
?>
