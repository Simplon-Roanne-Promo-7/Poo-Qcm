<?php

class Qcm
{
    private $db;
    private $questions = [];

    public function __construct(PDO $pdo)
    {
        $this->setDb($pdo);
        $this->getQuestions();
    }

    private function setDb($db)
    {
        $this->db = $db;
    }

    private function getQuestions()
    {
        $query = $this->db->query("SELECT * from questions");
        $allQuestionsFromDb = $query->fetchAll();

        foreach ($allQuestionsFromDb as $questionFromDb) {
            $question = new Question($questionFromDb);
            $this->getAnswers($question);
            array_push($this->questions, $question);
        }
    }

    private function getAnswers(Question $question)
    {
        $query = $this->db->prepare("SELECT * from answers WHERE question_id = :id");
        $query->execute([
            "id" => $question->getId()
        ]);

        $allAnswersFromQuestion = $query->fetchAll();

        foreach ($allAnswersFromQuestion as $answerFromQuestion) {
            $answer = new Answer($answerFromQuestion);
            $question->addAnswer($answer);
        }
    }

    public function generate()
    {
        foreach ($this->questions as $question) {
            echo "
                <h3> {$question->getTitle()} </h3> 
            ";
            foreach ($question->getAnswers() as $key => $answer) {
                echo "
                <div>
                    <input type='radio' id='{$key}' name=' {$key}reponse' value='{$answer->getContent()}'>
                    <label for='{$key}reponse'>{$answer->getContent()}</label>
                </div>
              ";
            }
        }
    }
}
