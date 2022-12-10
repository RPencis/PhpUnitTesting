<?php
use PHPUnit\Framework\TestCase;

class UserStaticTest extends TestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testNotifyReturnTrue()
    {
        $this->markTestSkipped("test");
        $user = new UserStatic("test@example.com");

        $user->setMailerCallable([MailerStatic::class, 'send']);

        $this->assertTrue($user->notify('Hello!'));
    }

    public function testNotifyReturnTrueUsingAnonymouseFunction()
    {   
        $user = new UserStatic("test@example.com");

        $user->setMailerCallable(function () {
            echo "mocked";

            return true;
        });

        $this->assertTrue($user->notify('Hello!'));
    }

    public function testNotifyReturnTrueUsingMockery()
    {
        $user = new UserStatic("test@example.com");

        $mock = Mockery::mock("alias:MailerStatic");

        $mock->shouldReceive('send')
            ->once()
            ->with($user->email, 'Hello!')
            ->andReturn(true);

        $this->assertTrue($user->notifyMockery('Hello!'));
    }
}
