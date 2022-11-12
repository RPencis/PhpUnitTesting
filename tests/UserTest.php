<?php
use PHPUnit\Framework\TestCase;

// require "User.php";

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User;

        $user->first_name = "Teresa";
        $user->surname = "Green";

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     */
    public function user_has_first_name()
    {
        $user = new User;

        $user->first_name = "Teresa";

        $this->assertEquals('Teresa', $user->first_name);
    }

    public function testNotificationIsSent()
    {
        $user = new User;

        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('me@example.com'), $this->equalTo('Hello'))
            ->willReturn(true);

        $user->setMailer($mockMailer);

        $user->email = "me@example.com";

        $this->assertTrue($user->notify("Hello"));
    }

    public function testCannotNotigyUserWithNoEmail()
    {
        $user = new User;
        $mockMailer = $this->getMockBuilder(Mailer::class)
            ->onlyMethods([])
            ->getMock();

        $user->setMailer($mockMailer);
        $this->expectException(Exception::class);
        $user->notify("Hello");
    }
}
