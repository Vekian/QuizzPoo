<?php
    class Qcm {
        private $questions = array();
        private $db;

        public function setDb($db){
                  return $this->db = $db;
                }
        public function __construct(PDO $db){
                    $this->setDb($db);
                }

        public function generate(){
            foreach($this->questions as $i =>$question){
                echo ("<fieldset><legend>" . $question->getContent() . "</legend>");
                $question->displayAnswers($i);
                echo("</fieldset>");
            }
        }

        public function addQuestion($question) {
            array_push($this->questions, $question);
        }

        public function getAnswers($idQuestion){
            $stmta = $this->db->query('SELECT * FROM answers
                                    WHERE id_question = "' . $idQuestion . '"');
            $array = $stmta->fetchAll(PDO::FETCH_CLASS, "Answer");
            return $array;
        }

        public function getQuestions(){
            $stmt = $this->db->query('SELECT * FROM questions');
            $this->questions = $stmt->fetchAll(PDO::FETCH_CLASS,"Question");
        }

        public function getQuestion(){
            $this->getQuestions();
            foreach($this->questions as $question){
                $question->setAnswers($this->getAnswers($question->getId()));
            }
        }
    }