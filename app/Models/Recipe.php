<?php 

class Recipe 
{
    protected $id;
    protected $created_at;
    protected $name;
    protected $description;
    protected $people;
    protected $prep_time;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getPeople()
    {
        return $this->people;
    }

    public function setPeople($people)
    {
        $this->people = $people;
        return $this;
    }

    public function getPrepTime()
    {
        return $this->prep_time;
    }

    public function setPrepTime($prep_time)
    {
        $this->prep_time = $prep_time;
        return $this;
    }
}

?>