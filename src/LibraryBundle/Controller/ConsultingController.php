<?php

namespace LibraryBundle\Controller;

use LibraryBundle\Entity\Categories;
use LibraryBundle\Entity\Books;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ConsultingController extends Controller
{
    /**
     * @Route("/books")
     */
    public function booksAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('LibraryBundle:Books')->findAll();

        return $this->render('LibraryBundle:Consulting:books.html.twig', array(
            'books' => $books,
        ));
    }

    /**
     * @Route("/cat/{id}")
     */
    public function catAction(Categories $categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('LibraryBundle:Books')->findBy(array('categorie' => $categorie));
        return $this->render('LibraryBundle:Consulting:cat.html.twig', array(
             'categorie' => $categorie,
            'books' => $books
        ));
    }

    /**
     
     * @Route("/books/{id}", name="detailbooks")
     */
    public function bookAction(Books $book)
    {
        
        return $this->render('LibraryBundle:Consulting:book.html.twig', array(
            'book' => $book,
        ));
    }

}
