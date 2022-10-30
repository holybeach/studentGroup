<?php
namespace EntitisHoly; 

class Student extends Methods{
    private string $status='Обучается';
    private DateTime $dateOfSth;
    private DateTime $reestablishDate;
    private $log=array();
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
    public function addLog(Student $newTransfer) :void {
        array_push($this->log, $newTransfer);
    }
    public function getGroup(): Group{
        return $this->group;
    }
    public function getYearOfComing(): DateTime{
        return $this->date;
    }
    public function setStatus(string $newStatus):void{
        $this->status=$newStatus;
    }
    public function getStatus():string{
        return $this->status;
    }
    public function setDateOfSth(DateTime $date):void{
        $this->dateOfSth=$date;
    } 
    public function setReestablishDate(DateTime $date):void{
        $this->reestablishDate=$date;
    } 
    public function getLog():string
    {
        return foreach($log as $elem){
            implode(' ',[
            $this->getInitialGroup(),
            $this->getFinalGroup(),
            $this->getDate(),
            $this->getCauses()
            ]);
        }
    }
}