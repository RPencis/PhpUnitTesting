<?php

class MailerStatic
{
    /**
     * Summary of send
     * @param string $email
     * @param string $message
     * @throws InvalidArgumentException
     * @return boolean
     */
    public static function send(string $email, string $message)
    {
        if (empty($email)) {
            throw new InvalidArgumentException;
        }

        echo "Send '$message' to $email";

        return true;
    }
}
