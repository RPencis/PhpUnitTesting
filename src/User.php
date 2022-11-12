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
     * [Description for $email]
     *
     * @var string
     */
    public $email;
    /**
     * @var Mailer
     */
    protected $mailer;

    

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

    /**
     * [Description for notify]
     *
     * @param string $message
     *
     * @return boolean
     *
     */
    public function notify($message)
    {
        return $this->mailer->sendMessage($this->email, $message);
    }


    /**
     * Set the value of mailer
     *
     * @param  Mailer  $mailer
     *
     * @return  self
     */ 
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;

        return $this;
    }
}
