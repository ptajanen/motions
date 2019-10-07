<?php
namespace App\Controller;

use App\Entity\Motions;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MotionsController extends AbstractController
{
/**
 * @Route("/motions", name="motions_list")
 */
public function index(){
    // Hakee kaikki aloitteet tietokannasta
    $motionss = $this->getDoctrine()->getRepository(Motions::class)->findAll();


    // Pyydetään näkymää näyttämään kaikki aloitteet
    return $this->render('motions/index.html.twig',[
        'motionss'    => $motionss,
    ]);
}
/**
     * @Route("/motions/new", name="motions_new")
     */
    public function new(Request $request){
        // creating motions-object
        $motions = new Motions();
  
        // creating form
        $form = $this->createForm(
          MotionsFormType::class,
          $motions, [
            'action'    => $this->generateUrl('motions_new'),
            'attr'      => ['class' => 'form-signin']
          ]
        );

        // treating data from the form 
      $form->handleRequest($request);
      if($form->isSubmitted()){
        // save form data to a parameter
        $motions = $form->getData();

        // save to db
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($motions);
        $entityManager->flush();

        // calling index-controller
        return $this->redirectToRoute('motions_list');
      }

      // asking view to show the view
        return $this->render('motions/new.html.twig', [
          'form1' => $form->createView()
        ]);
    }
/**
     * @Route("/motions/show/{id}", name="motions_show")
     */
    public function show($id){
        $motions = $this->getDoctrine()->getRepository(Motions::class)->find($id);
  
          return $this->render('motions/show.html.twig', [
            'motions'  => $motions,
          ]);
      }
    /**
 * @Route("/motions/modify/{id}", name="motions_modify" )
 */
public function modify(Request $request, $id){
    // creating the motions-object and returning it with filled-in values
    $motions = $this->getDoctrine()->getRepository(Motions::class)->find($id);

    // Form creation
    $form = $this->createForm(
        MotionsFormType::class,
        $motions, [
        'attr'      => ['class' => 'form-signin']
        ]
    );
//treating the data from the form
$form->handleRequest($request);
if($form->isSubmitted()){
  // save formdata to a parameter
  $motions = $form->getData();

  // save to db
  $entityManager = $this->getDoctrine()->getManager();
  $entityManager->flush();

  // calling for index-controller
  return $this->redirectToRoute('motions_list');
}      

 return $this->render('motions/modify.html.twig', [
   'form1'  => $form->createView()
 ]);
}
/**
     * @Route("/motions/print/{id}", name="motions_print")
     */
    public function print($id){
      $motions = $this->getDoctrine()->getRepository(Motions::class)->find($id);

        return $this->render('motions/print.html.twig', [
          'motions'  => $motions,
        ]);
    }
/**
     * @Route("/motions/delete/{id}", name="motions_delete")
     */
    public function delete(Request $request, $id){

        // create motions-object and return it with data filled in
        $motions = $this->getDoctrine()->getRepository(Motions::class)->find($id);
        
          // Delet the motion from the db
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->remove($lmotions);
          $entityManager->flush();
  
          return $this->redirectToRoute('motions_list');
  
         //return $this->render('motions/delete.html.twig');
      }
}

?>