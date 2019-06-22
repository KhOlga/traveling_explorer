<?php


namespace App\Controller;


use App\Entity\Contacts;
use App\Form\ContactsFormType;
use App\Repository\ContactsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\HttpFoundation\Response;





class ContactsController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @Route("/forms/contacts", name="forms_contacts")
     *
     */
    public function new(EntityManagerInterface $em, Request $request)
    {
        $form = $this->createForm(ContactsFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var Contacts $contact */
            $contact = $form->getData();

            $em->persist($contact);
            $em->flush();


            return $this->render('forms/data_sended.html.twig');

        }

        return $this->render('forms/contacts_form.html.twig', [
        'contactsForm' => $form->createView()
        ]);
    }





}
