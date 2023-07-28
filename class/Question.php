<?php

class Question
{

    private $id;
    private $title;
    private $explanation;
    private $answers = [];

    public function __construct(array $data)
    {
        $this->setId($data["id"]);
        $this->setTitle($data["title"]);
        $this->setExplanation($data["explanation"]);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of explanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Set the value of explanation
     */
    public function setExplanation(string $explanation): self
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Get the value of answers
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    public function addAnswer(Answer $answer)
    {
        array_push($this->answers, $answer);
    }
}
