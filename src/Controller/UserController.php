<?php

namespace App\Controller;
use App\Entity\User;
use App\Service\ImageServiceInterface;
use App\Service\UserServiceInterface;
use App\View\PhpTemplateEngine;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;

class UserController extends AbstractController
{
    const SALT = 'godSalt';
    public function __construct( 
        private UserServiceInterface $userService, 
        private ImageServiceInterface $imageService,
        private RequestStack $requestStack,
    ) 
    {
    }

    public function index(Request $request): Response
    {
        
        $session = $request->getSession();
        $userId = $session->get('user_id');
        if (!isset($userId)) {
            return $this->render('registrate_page.html.twig', ['title' => 'Registraton Form']);
        }
        $user = $this->userService->getUser($userId);
        return $this->render('main_page.html.twig', ['title' => 'AppPizza', 'user' => $user]);
    }

    public function registerUser(Request $request): Response
    {
        try
        {
            $imagePath = (!empty($request->files->get('avatar_path'))) ? $this->imageService->moveImageToUploads($request->files->get('avatar_path')) : null;
            $keys = $request->request->keys();
            foreach($keys as $key) {
                if ($key !== 'avatar_path')
                {
                    if (empty($request->get($key))) 
                    {
                        throw new Exception('Empty ' . $key . ' field!');
                    }
                }
            }
            $userId = $this->userService->saveUser(
                trim($request->get('name')),
                trim($request->get('surname')),
                trim($request->get('email')),
                trim($request->get('phone')),
                trim(md5($request->get('password') . self::SALT)),
                $imagePath,
            );   
            $session = $this->requestStack->getSession();
            $session->set('user_id', $userId);
            return $this->redirectToRoute('mainPage', [], Response::HTTP_SEE_OTHER);
        }
        catch (\Exception $e) 
        {
            //return $this->render('error_page.html.twig', ['error' => $e->getMessage()]);
            return new Response('This email or phone is already used', 403, []);
        }
    }

    public function logoutUser(Request $request) : Response 
    {   
        $session = $request->getSession();
        $session->remove('user_id');
        return $this->redirectToRoute('index', [], Response::HTTP_SEE_OTHER);
    }

    public function loginUserForm(Request $request) : Response 
    {   
        return $this->render('login_page.html.twig', ['title' => 'AppPizza']);
    }

    public function loginUser(Request $request) : Response 
    {   
        $data = json_decode($request->getContent(), true);
        if ($data['userLogin'] && $data['password'])
        {
            $allUsers = $this->userService->listUsers();
            foreach ($allUsers as $user)
            {
                if ($user->getEmail() === $data['userLogin'] || $user->getPhone() === $data['userLogin'] )
                {
                    if ($user->getPassword() === md5($data['password'] . self::SALT))
                    {
                        $session = $this->requestStack->getSession();
                        $session->set('user_id', $user->getUserId());
                        return $this->redirectToRoute('mainPage', [], Response::HTTP_SEE_OTHER);
                    }
                }
            }
        }
        return new Response('User not found', Response::HTTP_NOT_ACCEPTABLE, []);
    }
}