<?php
  class Content
  {
    private $id, $fk_business_id, $title, $description, $image, $fk_place_id, $fk_object_id;

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

    public function setTitle($title)
    {
      $this->title = $title;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function setDescription($description)
    {
      $this->decsription = $description;
    }

    public function getDescription()
    {
      return $this->description;
    }

    public function setImage($image)
    {
      $this->image = $image;
    }

    public function getImage()
    {
      return $this->image;
    }

    public function setPlaceID($fk_place_id)
    {
      $this->fk_place_id = $fk_place_id;
    }

    public function getPlaceID()
    {
      return $this->fk_place_id;
    }

    public function setObjectID($fk_object_id)
    {
      $this->fk_object_id = $fk_object_id;
    }

    public function getObjectID()
    {
      return $this->fk_object_id;
    }
  }
?>
