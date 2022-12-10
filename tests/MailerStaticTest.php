<?php
use PHPUnit\Framework\TestCase;

class MailerStaticTest extends TestCase
{
    public function testSendMessageReturnTrue()
    {
        $this->assertTrue(MailerStatic::send("test@example.com", "Hello!"));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        MailerStatic::send("", "Hello!");
    }
}
