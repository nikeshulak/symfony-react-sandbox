<?php
// Nepmon
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\SerializerInterface;

// use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
// use Symfony\Component\Serializer\Serializer;

use App\Entity\Cause;
use App\Entity\CauseType;

class MapController extends Controller
{
    /**
     * @Route("/", name="map")
     */
    public function index(SerializerInterface $serializer)//SerializerInterface $serializer
    {
        // serializer
        /*$normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);
        // Add Circular reference handler
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);*/



        // replace this line with your own code!
        $em = $this->getDoctrine()->getManager();
        // $causeTypes = $em->getRepository(CauseType::class)->findAll();
        $causeTypes = array();
        return $this->render('map/index.html.twig', array(
        		// 'causeTypes' => $causeTypes

                // 'props' => $serializer->normalize(['recipes' => $recipes]),
                'props' => $serializer->normalize(['causeTypes' => $causeTypes]),
        	)
        );
        // return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }
}
