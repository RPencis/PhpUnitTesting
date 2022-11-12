<?php

class Mailer
{
    /**
     * [Description for sendMessage]
     *
     * @param string $email
     * @param string $message
     *
     * @return boolean
     *
     */
    public function sendMessage($email, $message)
    {
        if(empty($email)){
            throw new Exception;
        }
        sleep(3);

        echo "send '$message' to '$email'";

        return true;
    }
}
