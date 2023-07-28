<?php

class Answer
{
    private $id;
    private $content;
    private $isTrue;
    private $questionId;

    public function __construct(array $data)
    {
        $this->setId($data['id']);
        $this->setContent($data['content']);
        $this->setIsTrue($data['is_true']);
        $this->setQuestionId($data['question_id']);
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
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of isTrue
     */
    public function getIsTrue()
    {
        return $this->isTrue;
    }

    /**
     * Set the value of isTrue
     */
    public function setIsTrue($isTrue): self
    {
        $this->isTrue = $isTrue;

        return $this;
    }

    /**
     * Get the value of questionId
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set the value of questionId
     */
    public function setQuestionId($questionId): self
    {
        $this->questionId = $questionId;

        return $this;
    }
}
