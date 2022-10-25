<?php
/**
 * A user of the system
 */
class User
{
    /**
     * Users First name
     * @var string
     */
    public $first_name;

    /**
     * usersers surname
     * @var string
     */
    public $surname;

    
    /**
     * get users full name using its first_name and surname
     *
     * @return string
     * 
     */
    public function getFullName(): string
    {   
        return trim("$this->first_name $this->surname");
    }

}
