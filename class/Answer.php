<?php
    class Answer {
        private $id;
        private $content;
        private $correct;
        private $id_question;
        const BONNE_REPONSE = true;
        const MAUVAISE_REPONSE = false;

        public function setContent(){
            $this->content = $content;
        }
        public function getContent(){
            return $this->content;
        }

        public function getId(){
            return $this->id;
        }
        public function isCorrect(){
            if ($this->correct === true){
                echo('Cette réponse est juste.');
            }
            else {
                echo('Cette réponse est fausse.');
            }
        }
    }