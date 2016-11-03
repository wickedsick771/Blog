<?php

namespace SoftUniBlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ArticleController extends Controller
{
    /**
     *
     * @param Request $request
     * @Route("/article/create", name="article_create")
     *g
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     */
    public function createAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $article->setCreatedOn(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('blog_index');
        }
        return $this->render("article/create.html.twig", [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/article/{id}", name="article_show")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id){
        $articleRepository = $this->getDoctrine()->getRepository(
            Article::class
        );
        $article = $articleRepository->find($id);

        return $this->render("article/show.html.twig", [
            "article" => $article
        ]);
    }

}
