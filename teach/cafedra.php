<?php
namespace EntitisMyrl;

class Cafedra{
    private $teachers = array ();
    public function __construct(
        private string $Name,
        private DateTime $dateOfCreating,
        private string $speciality
    ) {}
    public function addTeacher(Teacher $newTeacher) :void {
        array_push($this->teacher, $newTeacher);
    }
    public function getTeacher() 
    {
        return $this->teacher;      
    }
    public function getSpeciality(){
        return $this->speciality;
    }
    public function dismissial(string $firstName,string $lastName){
        foreach($this->teacher as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Уволен');
                $val->setDateOfSth(new DateTime('2022-10-30'));
            }
        }
    }
    public function transfer(string $firstName,string $lastName,Cafedra $cafedra){
        foreach($this->teacher as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                unset($this->teacher[$k]);
                $val->setDateOfTch(new DateTime());
                $group->addTeacher($val);
            }
        }
    }
    public function vacation(string $firstName,string $lastName){
        foreach($this->teacher as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('В отпуске');
                $val->setDateOfTch(new DateTime());
            }
        }
    }
    public function reestablish(string $firstName,string $lastName){
        foreach($this->teacher as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Работает');
                $val->setReestablishDate(new DateTime());
            }
        }
    }
    public function getByBirthMonth(int $month) : array {
        return array_filter($this->teacher, function($teacher) use ($month){
            return $teacher->getBirthDate()->format('m') === $month;
            });
    }
  
}