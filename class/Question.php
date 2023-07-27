<?php

class Question
{

    public $content;
    public $answers = [];

    public function __construct(string $content,)
    {
        $this->content = $content;
    }

    public function addAnswer(Answer $answer)
    {
        array_push($this->answers, $answer);
    }
}
