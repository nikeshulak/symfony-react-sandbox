<?php
// Nepmon
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use App\Entity\Report;
use App\Entity\Tag;

class ReportController extends Controller
{
    /**
     * @Route("/report", name="report")
     */
    public function index(Request $request)
    {
        // replace this line with your own code!
        $em = $this->getDoctrine()->getManager();
        $reports = $em->getRepository(Report::class)->findBy(array(), array('date'=> 'DESC'));

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
        	$reports,
        	$request->query->getInt('page', 1),
        	$request->query->getInt('limit', 10)
        );

        return $this->render('report/index.html.twig', array(
        	'reports' => $result,
        ));
    }

    /**
     * Report show
     *
     * @Route("/report/{id}", name="report_show")
     * @Method({"GET", "POST"})
     */
    public function showAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $report = $em->getRepository(Report::class)->findById($id);
        $tagTitles = [];
        $reportTagTitles = [];
        $tags = $em->getRepository(Tag::class)->findAll();
        for ($i=0; $i < count($tags); $i++) { 
        	if (!in_array($tags[$i]->getName(), $tagTitles)) {
			    array_push($tagTitles, $tags[$i]->getName());
			}
        }
        // $reportTags = $report[0]->getReportTags();
        // for ($i = 0 ; $i < count($reportTags); $i++) {
        // 	array_push($reportTagTitles, $reportTags[$i]->getTag()->getTitle());
        // }
        $relatedReports = [];
        if($report[0]->getPrimaryCause() != null)
        	$relatedReports = $em->getRepository(Report::class)->getRelatedReports($report[0]);

        shuffle($relatedReports);
        $relatedReports = array_slice($relatedReports, 0, 5);
		// echo count($relatedReports); exit();

        if(count($report) > 0) {
        	return $this->render('report/show.html.twig',array(
        		'report' => $report[0],
        		'tagTitles' => $tagTitles,
        		'reportTagTitles' => $reportTagTitles,
        		'relatedReports' => $relatedReports,
        	));
        }
        
    }
}
