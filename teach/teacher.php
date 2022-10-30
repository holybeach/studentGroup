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
        private Group $diploma,
        private Group $experience,
        private Group $subj,
    ){
        parent::__construct(
            firstName:$firstName,
            lastName:$lastName,
            birthDate:$birthDate,
            gender:$gender);
    }
    public function getDiploma(): Group{
        return $this->diploma;
    }
    public function getExperience(): Group{
        return $this->experience;
    }
    public function getSubj(): Group{
      return $this->subj;
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
}