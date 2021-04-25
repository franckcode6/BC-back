<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AuthController extends AbstractController
{
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();

        $email = json_decode($request->getContent())->email;
        $password = json_decode($request->getContent())->password;
        $lastName = json_decode($request->getContent())->lastName;
        $fistName = json_decode($request->getContent())->firstName;
        $telNumber = json_decode($request->getContent())->telNumber;
        $siret = json_decode($request->getContent())->siret;

        $user = new User();
        $user->setEmail($email);
        $user->setPassword($encoder->encodePassword($user, $password));
        $user->setRoles(['ROLE_USER']);
        $user->setLastName($lastName);
        $user->setFirstName($fistName);
        $user->setTelNumber($telNumber);
        $user->setSiret($siret);
        $em->persist($user);
        $em->flush();

        return new Response(sprintf('User %s successfully created', $user->getUsername()));
    }

    public function api()
    {
        return new Response(sprintf('Logged in as %s', $this->getUser()->getUsername()));
    }
}
