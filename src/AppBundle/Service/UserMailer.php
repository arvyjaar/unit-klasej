<?php
/**
 * Created by PhpStorm.
 * User: arvydas
 * Date: 4/6/17
 * Time: 5:34 PM
 */

namespace AppBundle\Service;

use AppBundle\Entity\User;

class UserMailer
{
    public function __construct(Mailer $mailer, HappyNumberGenerator $generator)
    {
        $this->mailer = $mailer;
        $this->generator = $generator;
    }

    public function sendHello(User $user)
    {
        $body = sprintf('Hello %s. Your Happy Number is %d', $user->getName(), $this->generator->generate());
        $this->mailer->send($user->getEmail(), $body);
    }
}