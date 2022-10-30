<?php

namespace EntitisHood;

class Log{
    public function __construct(private Group $initialGroup, private Group $finalGroup,private DateTime $date,private string $causes){

}
public function getInitialGroup(): Group{
    return $this->initialGroup;
}
public function getFinalGroup(): Group{
    return $this->finalGroup;
}
public function getDate(): DateTime{
    return $this->date;
}
public function getCauses(): string{
    return $this->causes;
}
}

