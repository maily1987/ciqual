<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ciqual;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;

class CiqualApiController extends FOSRestController
{
    /**
     * @var Ciqual
     *
     * @return array|null
     *
     * @Rest\Get("/api/ciquals/{ciqual_id}", name= "ciqual_id", requirements= {"ciqual_id": "\d+"})
     * @ParamConverter("ciqual", options={"id" = "ciqual_id"})
     */
    public function getCiqualAction(Ciqual $ciqual)
    {
        if (!$ciqual) {
            return new View('Ciqual not found', Response::HTTP_NOT_FOUND);
        }

        return $ciqual;
    }

    /**
     * @var string
     *
     * @return array|null
     *
     * @Rest\Get("/api/ciquals/{ingredient}", name= "ciqual_list")
     */
    public function getCiqualByIngredien(string $ingredient)
    {
        $ciquals = $this->getDoctrine()->getRepository('AppBundle:Ciqual')->findByORIGGPFROrORIGFDNM($ingredient);

        if (!$ciquals) {
            return [];
        }

        return [
            'ciquals' => $ciquals,
        ];
    }
}
