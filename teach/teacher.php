<?php
namespace EntitisMyrl; 

class Teacher extends Methods{
    private string $status='Работает';
    private DateTime $dateOfTch;
    private DateTime $reestablishDate;
    public function __construct(
        string $firstName,
        string $lastName,
        DateTime $birthDate,
        string $gender,
        private  $diploma,
        private $experience,
        private  $subj,
        private Cafedra $cafedra,
        private Group $group,
    )
    
    {
        parent::__construct(
            firstName:$firstName,
            lastName:$lastName,
            birthDate:$birthDate,
            gender:$gender);
    }

    public function getCafedra(): Cafedra{
        return $this->group;
    }

    public function setStatus(string $newStatus){
        $this->status=$newStatus;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setDateOfTch(DateTime $date){
        $this->dateOfTch=$date;
    } 

    public function setReestablishDate(DateTime $date){
        $this->reestablishDate=$date;
    } 
    public function getGroup(): Group{
        return $this->group;
    }
}