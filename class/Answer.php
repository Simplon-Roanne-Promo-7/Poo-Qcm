<?php

class Answer
{

    private $content;
    private $goodAnswer;

    public function __construct(string $content, $isTrue = false)
    {
        $this->content = $content;
        $this->goodAnswer = $isTrue;
    }

    public function getContent()
    {
        return $this->content;
    }
}
