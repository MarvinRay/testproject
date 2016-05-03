<?php
/**
 * Created by PhpStorm.
 * User: stevierayvau
 * Date: 03.05.16
 * Time: 06:09
 */

class Profile{

    var $profile;

    public function __construct()
    {

        $this->profile = (object) array(
            "user_name" => "Stevie-Ray",
            "user_id"   => "1",
            "user_pass" => "Password"
        );

    }

    public function getId(){

        return $this->profile->user_id;

    }

    public function getUsername(){

        return $this->profile->user_name;

    }

}

$user = new Profile();

echo $user->getUsername();