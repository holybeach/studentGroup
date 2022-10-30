<?php
namespace EntitisHoly; 

class Student extends Methods{
    private string $status='Обучается';
    private DateTime $dateOfSth;
    private DateTime $reestablishDate;
    public function __construct(
        string $firstName,
        string $lastName,
        DateTime $birthDate,
        string $gender,
        private Group $group,
        private DateTime $date,
    ){
        parent::__construct(
            firstName:$firstName,
            lastName:$lastName,
            birthDate:$birthDate,
            gender:$gender);
    }
    public function getGroup(): Group{
        return $this->group;
    }
    public function getYearOfComing(): DateTime{
        return $this->date;
    }
    public function setStatus(string $newStatus){
        $this->status=$newStatus;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setDateOfSth(DateTime $date){
        $this->dateOfSth=$date;
    } 
    public function setReestablishDate(DateTime $date){
        $this->reestablishDate=$date;
    } 
}