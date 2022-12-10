<?php
class UserStatic
{
    /**
     * Summary of email
     * @var mixed
     */
    public $email;

    protected $mailer;

    protected $mailerCallable;

    /**
     * Summary of __construct
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Summary of notify
     * @param string $message
     * @return bool
     */
    public function notify(string $message)
    {
        // return $this->mailer::send($this->email, $message);

        return call_user_func($this->mailerCallable, $this->email, $message);
    }

    public function notifyMockery(string $message)
    {
        return MailerStatic::send($this->email, $message);
    }

    /**
     * Set the value of mailer
     */
    public function setMailer($mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Set the value of mailerCallable
     *
     */ 
    public function setMailerCallable(callable $mailerCallable)
    {
        $this->mailerCallable = $mailerCallable;
    }
}
