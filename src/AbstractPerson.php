<?php

abstract class AbstractPerson
{
    protected $surname;

    public function __construct(string $surname)
    {
        $this->surname = $surname;
    }
    /**
     * Summary of getTitle
     * @return string
     */
    abstract protected function getTitle();
    /**
     * Summary of getNameAndTitle
     * @return string
     */
    public function getNameAndTitle()
    {
        return $this->getTitle() . ' ' . $this->surname;
    }
}
