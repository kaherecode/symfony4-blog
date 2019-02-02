<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    public function index()
    {
        return new Response('<h1>Homepage</h1>');
    }

    public function add()
    {
    	return new Response('<h1>Add an article</h1>');
    }

    public function show($url)
    {
    	return new Response('<h1>Read article: ' .$url. '</h1>');
    }

    public function edit($id)
    {
    	return new Response('<h1>Update article: ' .$id. '</h1>');
    }

    public function remove($id)
    {
    	return new Response('<h1>Delete article: ' .$id. '</h1>');
    }
}
