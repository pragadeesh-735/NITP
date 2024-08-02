<?php

declare(strict_types=1);



namespace App\Controller;

use Cake\Controller\Controller;

class AppController extends Controller
{
    protected $userEmail;

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');

        // Get the authenticated user
        $user = $this->request->getAttribute('identity');
        // print_r($user['email']);
        // exit();
        // if ($user) {
        //     $userEmail = $user->get('email');
        //     // print_r($userEmail);
        //     // exit();
        // }

        $this->set(compact('user', 'userEmail'));
    }

    // public function beforeFilter(EventInterface $event)
    // {
    //     parent::beforeFilter($event);
    //     $this->Authentication->addUnauthenticatedActions(['login', 'register', 'home']);
    // }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);


        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check
        // $this->Authentication->addUnauthenticatedActions(['index', 'view']);
        $this->Authentication->addUnauthenticatedActions(['login', 'register', 'home']);
    }
}

// class AppController extends Controller
// {
    
//     public function initialize(): void
//     {
//         parent::initialize();
//         $this->loadComponent('Flash');

//         // Add this line to check authentication result and lock your site
//         $this->loadComponent('Authentication.Authentication');

//         // // Get the authenticated user
//         // $user = $this->request->getAttribute('identity');
//         // $useremail = $this->Auth->user('email');

//         // // if ($user) {
//         // // $user_id = $user->get('id');
//         // // }
//         // $this->set(compact('user'));
//         $user = $this->request->getAttribute('identity');

//         if ($user) {
//             $userEmail = $user->get('email');
//             $this->set(compact('user', 'userEmail'));
//         } else {
//             $this->set(compact('user'));
//         }

//         /*
//          * Enable the following component for recommended CakePHP form protection settings.
//          * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
//          */
//         //$this->loadComponent('FormProtection');
//     }
//     public function beforeFilter(\Cake\Event\EventInterface $event)
//     {
//         parent::beforeFilter($event);


//         // for all controllers in our application, make index and view
//         // actions public, skipping the authentication check
//         // $this->Authentication->addUnauthenticatedActions(['index', 'view']);
//         $this->Authentication->addUnauthenticatedActions(['login', 'register', 'home']);
//     }
// }
