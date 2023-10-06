<?php
class User{

    public $name;
    public $userName;
    public $followerCount;

}
$mohanObject = new User();
$mohanObject->name = "Mohan";
$mohanObject->userName = "@Mohan";
$mohanObject->followerCount = 1000;
print_r($mohanObject);