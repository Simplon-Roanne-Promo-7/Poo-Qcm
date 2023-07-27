<?php

class Qcm
{
    private $questions = [];

    public function addQuestion(Question $question)
    {
        array_push($this->questions, $question);
    }

    function generate()
    {
        foreach ($this->questions as $key => $question) {
            echo "<h2>{$question->content}</h2> <br>";
            foreach ($question->answers as $key => $answer) {
                echo "{$answer->getContent()} <br>";
            }
        }
    }
}
