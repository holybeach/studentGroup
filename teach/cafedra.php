<?php
namespace EntitisMyrl;

class Cafedra{
    private $teachers = array ();
    public function __construct(
        private string $Name,
        private DateTime $dateOfCreating,
        private string $speciality,
        private Leader $managing,
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
    public function getManaging(){
        return $this->managing;
    }
    public function dismissial(string $firstName,string $lastName){
        foreach($this->teacher as $a=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Уволен');
                $val->setDateOfTch(new DateTime('2022-10-30'));
            }
        }
    }

    public function reestablish(string $firstName,string $lastName){
        foreach($this->teacher as $a=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Работает');
                $val->setReestablishDate(new DateTime('2022-11-30'));
            }
        }
    }

    public function transfer(string $firstName,string $lastName,Cafedra $cafedra){
        foreach($this->teacher as $a=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                unset($this->teacher[$a]);
                $val->setDateOfTch(new DateTime());
                $cafedra->addTeacher($val);
            }
        }
    }

    public function vacation(string $firstName,string $lastName){
        foreach($this->teacher as $a=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('В отпуске');
                $val->setDateOfTch(new DateTime());
            }
        }
    }

    

    public function getByBirthMonth(int $month) : array {
        return array_filter($this->teacher, function($teacher) use ($month){
            return $teacher->getBirthDate()->format('m') === $month;
            });
    }

    public function headOf(Leader $newManaging) : void
    {
        $this->managing = $newManaging;
    }
  
}