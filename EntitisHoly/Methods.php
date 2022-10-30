<?php
namespace EntitisHoly;

abstract class Methods extends Human{
    public function __construct(
        string $firstName,
        string $lastName,
        DateTime $birthDate,
        string $gender,
    ){
        parent::__construct(
            firstName:$firstName,
            lastName:$lastName,
            birthDate:$birthDate,
            gender:$gender);
    }
    abstract function dismissial(string $firstName,string $lastName);
    abstract function transfer();
    abstract function vacation(string $firstName,string $lastName);
    abstract function reestablish(string $firstName,string $lastName);
}