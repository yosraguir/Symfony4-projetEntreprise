<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Employee;
use App\Entity\User;
use App\Entity\Team;
use App\Entity\Projet;
use App\Form\EmployeeType;
use App\Form\TeamType;
use App\Form\ProjetType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee", name="employee")
     */
    public function index(): Response
    {
        return $this->render('employee/index.html.twig', [
            'controller_name' => 'EmployeeController',
        ]);
    }


  /**
     * @Route("/layaout", name="layaout")
       
     */
    public function layaout(){
        return $this->render('Employee/layaout.html.twig');
    }
  

    public function menu()
    {
       
        return $this->render('Employee/menu.html.twig');
          
       
    } 

    

    //pour connecter
    /**
    * @Route("/login", name="login")
    */
    public function login(){
     return $this->render('Employee/login.html.twig');
}



    //pour faire le logout
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        
    return $this->redirectToRoute("layaout");

  
    }

  //pour ajouter un employee a partir du dashboard de l'admin
    /**
    * @route("/ajout" , name="ajout_emp")
    */
   public function ajout (Request $request )
   {  
  
        $employee = new Employee();
        $form = $this->createForm(EmployeeType::class, $employee);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
          $employee = $form->getData();
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($employee);
          $entityManager->flush();
          return $this->redirectToRoute('listemp');
          }
          return $this->render('Employee/ajouter.html.twig',['form' => $form->createView()]);
      
    } 
    
  

 //afficher la page de modification du employee et remplir les champs
    /**
     * @Route("/modifemp/{id}", name="modifemp")
     */
    public function modificationemp(Request $request,$id)
    
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository( Employee::class);
        $listemp =$repo->find( $id);
        return $this->render('Employee/modifemp.html.twig', [
            'employee' => $listemp,
        ]);
    } 
   
  
   //pour afficher la liste des employees dans le dashboard de l'admin
    /**
     * @Route("/listemp", name="listemp")
     */
    public function listeemp(Request $request)
    
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository( Employee::class);
        $listemp =$repo->findAll();
        return $this->render('Employee/listEmp.html.twig', [
            'employees' => $listemp,
        ]);
    }
    
    /**
     * @route("/modif" , name="modif")
     */
    public function modif (Request $request )
    {
        $params = $request->query->all();
        $id = $request->get('id');
        $cin = $request->get('cin');
        $name = $request->get('name');
        $position = $request->get('position');
        $age = $request->get('age');
        $salary = $request->get('salary');
        $role = $request->get('role');
        $em = $this->getDoctrine()->getRepository(Employee::class)->find($id);
        $entity=$this->getDoctrine()->getManager();
        $em->setCin($cin);
        $em->setName($name);
        $em->setPosition($position);
        $em->setAge($age);
        $em->setSalary($salary);
        $em->setRole($role);
        $entity->persist($em);
        $entity->flush();
        return $this->redirectToRoute("listemp");  
    } 
      //pour supprimer un employee
    /**
     * @Route("delete/{id}", name="delete")
     */
    public function delete(Request $request,$id) {
        $wantedUser = $this->getDoctrine()->getRepository(Employee::class)->find($id);
        if (!$wantedUser) {
            throw $this->createNotFoundException("User with id ".id." not found in the database !");
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($wantedUser);
        $entityManager->flush();
        return($this->redirectToRoute('listemp'));
    }
    
   //// pour la classe team
  //pour ajouter un team
    /**
    * @route("/ajout_team" , name="ajout_team")
    */
   
    public function ajout_team (Request $request )
    {
         if($request->isMethod('POST'))
         {
         
         $name = $request->request->get('name');
         $em = $this->getDoctrine()->getManager();
         $team = new Team();
         $team->setName($name);
        $em->persist($team);
         $em->flush();
         return($this->redirectToRoute('listteam'));
         }
         return $this->render('Employee/ajoutTeam.html.twig');
    }

    /**
     * @Route("/listteam", name="listteam")
     */
    public function listTeam(Request $request)
    
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository( Team::class);
        $listteam =$repo->findAll();
        return $this->render('Employee/listTeam.html.twig', [
            'teams' => $listteam,
        ]);
    }
    //pour supprimer un team
    /**
     * @Route("deleteteam/{id}", name="deleteteam")
     */
    public function deleteteam(Request $request,$id) {
        $wantedUser = $this->getDoctrine()->getRepository(Team::class)->find($id);
        if (!$wantedUser) {
            throw $this->createNotFoundException("User with id ".id." not found in the database !");
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($wantedUser);
        $entityManager->flush();
        return($this->redirectToRoute('listteam'));
    }
//afficher la page de modification du team et remplir les champs
    /**
     * @Route("/modifteam/{id}", name="modifteam")
     */
    public function modificationteam(Request $request,$id)
    
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository( Team::class);
        $listteam =$repo->find( $id);
        return $this->render('Employee/modifteam.html.twig', [
            'team' => $listteam,
        ]);
    } 
    /**
     * @route("/modift" , name="modift")
     */
    public function modift (Request $request )
    {
        $params = $request->query->all();
        $id = $request->get('id');
      
        $name = $request->get('name');
     
        $em = $this->getDoctrine()->getRepository(Team::class)->find($id);
        $entity=$this->getDoctrine()->getManager();
     
        $em->setName($name);
       
        $entity->persist($em);
        $entity->flush();
        return $this->redirectToRoute("listteam");  
    } 
   //pour la classe user
  

    /**
    * @route("/register" , name="register")
    */
   
    public function register(Request $request )
    {
         if($request->isMethod('POST'))
         {
            $firstName = $request->request->get('frist_name');
            $lastName = $request->request->get('last_name');
            $email = $request->request->get('email');
            $password = $request->request->get('password');
         $confpassword = $request->request->get('confpassword');
         $em = $this->getDoctrine()->getManager();
         $user = new User();
          $user->setLastName($lastName);
         $user->setFirstName($firstName);
         $user->setEmail($email);
         $user->setPassword($password);
         $user->setConfPassword($confpassword);
        $em->persist($user);
         $em->flush();
       
         }
         return $this->render('Employee/register.html.twig');
    }

       //pour la classe projet
 /**
    * @route("/ajout_projet" , name="ajout_projet")
    */
   
    public function ajoutProjet (Request $request )
    { $projet = new Projet();
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
          $projet = $form->getData();
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($projet);
          $entityManager->flush();
         
          return $this->redirectToRoute('listprojet');
          }
          return $this->render('Employee/ajoutProjet.html.twig',['form' => $form->createView()]);
      
    } 

  /**
     * @Route("/listprojet", name="listprojet")
     */
    public function listProjet(Request $request)
    
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository( Projet::class);
        $listprojet =$repo->findAll();
        return $this->render('Employee/listProjet.html.twig', [
            'projets' => $listprojet,
        ]);
    }
 
//afficher la page de modification du employee et remplir les champs
    /**
     * @Route("/modifprojet/{id}", name="modifprojet")
     */
    public function modificationprojet(Request $request,$id)
    
    {
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository( Projet::class);
        $listprojet =$repo->find( $id);
        return $this->render('Employee/modifprojet.html.twig', [
            'projet' => $listprojet,
        ]);
    } 

    /**
     * @route("/modifp" , name="modifp")
     */
    public function modifprojet (Request $request )
    {
        $params = $request->query->all();
        $id = $request->get('id');
        $name = $request->get('name');
        $description = $request->get('description');
        $technologie = $request->get('technologie');
        $beneficiaire = $request->get('beneficiaire');
        $em = $this->getDoctrine()->getRepository(Projet::class)->find($id);
        $entity=$this->getDoctrine()->getManager();
        $em->setName($name);
        $em->setDescription($description);
        $em->setTechnologie($technologie);
        $em->setBeneficiaire($beneficiaire);
        $entity->persist($em);
        $entity->flush();
        return $this->redirectToRoute("listprojet");  
    } 

    //pour supprimer un projet
    /**
     * @Route("deletep/{id}", name="deletep")
     */
    public function deleteprojet(Request $request,$id) {
        $wantedUser = $this->getDoctrine()->getRepository(Projet::class)->find($id);
        if (!$wantedUser) {
            throw $this->createNotFoundException("User with id ".id." not found in the database !");
        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($wantedUser);
        $entityManager->flush();
        return($this->redirectToRoute('listprojet'));
    }
}


