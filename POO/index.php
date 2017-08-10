<?php
class car
{
    private  $owner;
    public function move(){
        echo 'moving <br>';
    }
    public function getOwner(){
        return $this->owner;
    }
    public function setOwner(){
        $this->owner=$owner;
    }
}

echo 'class car <br>';
$car=new car();
$car->move();

$car->owner='alex';

echo 'owner:' .$car->owner;