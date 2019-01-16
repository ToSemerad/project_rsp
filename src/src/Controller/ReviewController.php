<?php

namespace App\Controller;

use App\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dashboard/review")
 */
class ReviewController extends AbstractController
{
    /**
     * @Route("/review/{id}", name="review_accept")
     */
    public function accept(int $id)
    {
        $this->changeStatus($id, 'accepted');
        $this->addFlash('success', 'Posudek byl úspěšně přiřazen');
        return $this->redirectToRoute('dashboard');
    }

    /**
     * @Route("/reject/{id}", name="review_reject")
     */
    public function reject(int $id)
    {
        $this->changeStatus($id, 'rejected');
        $this->addFlash('danger', 'Posudek byl úspěšně odmítnut');
        return $this->redirectToRoute('dashboard');
    }

    /**
     * @Route("/show/{id}", name="review_show")
     */
    public function show(int $id)
    {
        return $this->render('review/show.html.twig', [
            'review' => $this->getDoctrine()->getManager()->getRepository(Review::class)->find($id),
        ]);
    }

    private function changeStatus(int $id, string $status)
    {
        $em = $this->getDoctrine()->getManager();
        $review = $em->getRepository(Review::class)->find($id);
        $review->setStatus($status);
        $em->persist($review);
        $em->flush();
    }
}
