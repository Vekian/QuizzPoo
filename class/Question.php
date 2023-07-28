<?php

class Question {
    private $id;
    private $content;
    private $answers = array();
    private $explication;

    public function addAnswer($answer) {
        array_push($this->answers, $answer);
    }

    public function getContent(){
        return $this->content;
    }

    public function getId(){
        return $this->id;
    }

    public function displayAnswers($number){
        foreach($this->answers as $index => $answer){
            echo ("<div><input type='checkbox' id='". $answer->getId() . "' name='" . $answer->getId() . "'><label for='". $answer->getId() . "'>" . $answer->getContent() . "</label></div>");
        };
    }

    public function setExplications($explication){
        $this->explication = $explication;
    }
    public function setAnswers($answers){
        $this->answers = $answers;
    }
}