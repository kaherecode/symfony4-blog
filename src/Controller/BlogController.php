<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{
    public function index()
    {
        return $this->render('blog/index.html.twig');
    }

    public function add(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return new Response('Le formulaire a été soumis...');
        }

    	return $this->render('blog/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function show($url)
    {
    	return $this->render('blog/show.html.twig', [
            'slug' => $url
        ]);
    }

    public function edit($id)
    {
    	return $this->render('blog/edit.html.twig', [
            'slug' => $id
        ]);
    }

    public function remove($id)
    {
    	return new Response('<h1>Delete article: ' .$id. '</h1>');
    }
}
