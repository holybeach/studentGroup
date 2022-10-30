<?php
namespace EntitisHoly;

class Group{
    private $students = array ();
    public function __construct(
        private string $Name,
        private DateTime $dateOfCreating,
        private Leader $leader,
        private string $speciality
    ) {}
    public function addStudent(Student $newStudent) :void {
        array_push($this->students, $newStudent);
    }
    public function getStudents() 
    {
        return $this->students;      
    }
    public function getLeader(){
        return $this->leader;
    }
    public function getSpeciality(){
        return $this->speciality;
    }
    public function dismissial(string $firstName,string $lastName){
        foreach($this->students as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Отчислен');
                $val->setDateOfSth(new DateTime('2022-10-13'));
            }
        }
    }
    public function transfer(string $firstName,string $lastName,Group $group){
        foreach($this->students as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                unset($this->students[$k]);
                $val->setDateOfSth(new DateTime());
                $group->addStudent($val);
            }
        }
    }
    public function vacation(string $firstName,string $lastName){
        foreach($this->students as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('В отпуске');
                $val->setDateOfSth(new DateTime());
            }
        }
    }
    public function reestablish(string $firstName,string $lastName){
        foreach($this->students as $k=>$val){
            if($val->getFirstName() == $firstName and $val->getLastName()==$lastName){
                $val->setStatus('Обучается');
                $val->setReestablishDate(new DateTime());
            }
        }
    }
    public function getByBirthMonth(int $month) : array {
        return array_filter($this->students, function($student) use ($month){
            return $student->getBirthDate()->format('m') === $month;
            });
    }
    public function changeLeader(Leader $newLeader) : void
    {
        $this->leader = $newLeader;
    }
    
}