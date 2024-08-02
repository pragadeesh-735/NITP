<?php

declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    // public function login()
    // {
    //     $this->viewBuilder()->setLayout('layout');

    //     $this->request->allowMethod(['get', 'post']);

    //     $result = $this->Authentication->getResult();

    //     if ($result && $result->isValid()) {
    //         $redirect = $this->request->getQuery('redirect', [
    //             'controller' => 'Pages',
    //             'action' => 'home',
    //         ]);

    //         return $this->redirect($redirect);
    //     }
    //     if ($this->request->is('post') && !$result->isValid()) {
    //         $this->Flash->error(__('Invalid username or password'));
    //     }
    // }

    public function login()
    {
        $this->viewBuilder()->setLayout('layout');
        $this->request->allowMethod(['get', 'post']);

        $result = $this->Authentication->getResult();
        $error = '';

        if ($result && $result->isValid()) {
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Pages',
                'action' => 'home',
            ]);

            return $this->redirect($redirect);
        }

        if ($this->request->is('post') && !$result->isValid()) {
            $error = 'Incorrect username or password!';
        }

        $this->set(compact('error'));
    }


    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
    public function register()
    {
        $this->viewBuilder()->setLayout('layout');
        $error = '';

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user->name                   = $this->request->getData('name');
            $user->batch                     = $this->request->getData('batch');
            $user->department               = $this->request->getData('department');
            $user->email               = $this->request->getData('email');
            $user->password               = $this->request->getData('password');
            $user->phone_number               = $this->request->getData('phone_number');
            $user->social_media               = $this->request->getData('social_media');
            $user->current_position               = $this->request->getData('current_position');
            $user->livingin               = $this->request->getData('livingin');

            if ($this->Users->save($user)) {
                // $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $error = 'The user could not be saved. Please, try again.';

            // $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user', 'error'));
    }
}
