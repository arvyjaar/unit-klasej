<?php
/**
 * Created by PhpStorm.
 * User: arvydas
 * Date: 4/6/17
 * Time: 5:40 PM
 */

namespace Tests\Service;

use AppBundle\Service\HappyNumberGenerator;
use AppBundle\Service\Mailer;
use AppBundle\Entity\User;
use AppBundle\Service\UserMailer;
use PHPUnit\Framework\TestCase;

class UserMailerTest extends \PHPUnit_Framework_TestCase
{
    public function testSendHello()
    {
        /** @var Mailer|\PHPUnit_Framework_MockObject_MockObject $mailerMock */
        $mailerMock = $this->createMock(Mailer::class);
        $mailerMock->expects($this->once())
            ->method('send')
            ->with('me@example.com', 'Hello Vardas. Your Happy Number is 20');

        $generator = $this->createMock(HappyNumberGenerator::class);
        $generator->expects($this->once())
            ->method('generate')
            ->willReturn(20);

        $user = new User();
        $user->setName('Vardas');
        $user->setEmail('me@example.com');

        $userMailer = new UserMailer($mailerMock, $generator);
        $userMailer->sendHello($user);
    }
}
