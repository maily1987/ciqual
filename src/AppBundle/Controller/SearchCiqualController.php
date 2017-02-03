<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class SearchCiqualController extends Controller
{
    /**
     * @param Request $request
     *
     * @return array
     *
     * @Route("/app/search-ciqual", name="search_ciqual")
     * @Template("@App/ciqual/list.html.twig")
     */
    public function ciqualListAction(Request $request): array
    {
        $form = $this->createFormBuilder()
            ->add('ingredient', TextType::class)
            ->add('search', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (null !== $ingredient = $form->getData()['ingredient']) {
                $ciquals = $this->getResult($ingredient);
            }

            if (!$ciquals) {
                $notFound = 1;
            }
        }

        return
            [
            'form' => $form->createView(),
            'ciquals' => isset($ciquals) ? $ciquals : null,
            'notFound' => isset($notFound) ? $notFound : null,
        ]
        ;
    }

    /**
     * @param integer $id
     *
     * @return array
     *
     * @Route("/app/ciqual-detail/{id}", name="ciqual_detail", requirements= {"id": "\d+"})
     * @Method({"GET"})
     * @Template("@App/ciqual/detail.html.twig")
     */
    public function ciqualDetailAction(int $id): array
    {
        $ciqual = $this->getResult($id);

        return
            [
                'ciqual' => isset($ciqual) ? $ciqual : null,
            ]
        ;
    }

    /**
     * @param mixed $uri
     * @param integer $maxDepth
     *
     * @return array
     */
    private function getResult($uri, int $maxDepth = 10): array
    {
        //Better to do in service (function public) if used anywhere in the application
        if (!$uri) {
            return [];
        }
        $client = $this->get('csa_guzzle.client.api_ciqual');
        $stream = $client->get('/api/ciquals/'.$uri)->getBody();
        if (!$contents = $stream->getContents()) {
            return [];
        }
        $result = json_decode($contents, true, $maxDepth);

        return $result;
    }
}
