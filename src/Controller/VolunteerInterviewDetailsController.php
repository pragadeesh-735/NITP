<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

class VolunteerInterviewDetailsController extends AppController
{
    public function add()
    {
        $this->viewBuilder()->setLayout('layout');

        $volunteerInterviewDetail = $this->VolunteerInterviewDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $volunteerInterviewDetail = $this->VolunteerInterviewDetails->patchEntity($volunteerInterviewDetail, $this->request->getData());
            if ($this->VolunteerInterviewDetails->save($volunteerInterviewDetail)) {
                // $this->Flash->success(__('The volunteer interview detail has been saved.'));



                return $this->redirect(['action' => 'success']);
            }
            $this->Flash->error(__('The volunteer interview detail could not be saved. Please, try again.'));
        }
        $this->set(compact('volunteerInterviewDetail'));
    }

    // public function success()
    // {
    //     $this->viewBuilder()->setLayout('layout');
    //     $this->loadModel('Users');
    //     $mailer = new Mailer('default');
    //     $mailer
    //         ->setTransport('default')
    //         ->setFrom(['pragadeeshpragadeesh23@gmail.com' => 'The volunteer interview success'])
    //         ->setTo('pragadeesh@mslabs.in')
    //         ->setEmailFormat('html')
    //         ->setSubject('The volunteer interview Application')
    //         // ->deliver("Username: ".$email."<br>Password:".$password."");

    //         ->deliver("<p>Dear " .  ",</p><p>Your volunteer interview detail successfully saved. .
    //             </p><br>
    //             <p>*Note: Please do not reply to this email, as it is a computer generated email.</p>
    //             <br>");
    // }

    public function success()
    {
        $this->viewBuilder()->setLayout('layout');
        $user = $this->request->getAttribute('identity');
        $email = $user['email'];
        if (isset($email)) {
            $mailer = new Mailer('default');
            $mailer
                ->setTransport('default')
                ->setFrom(['pragadeeshpragadeesh23@gmail.com' => 'The volunteer interview success'])
                ->setTo($email)
                ->setEmailFormat('html')
                ->setSubject('The volunteer interview Application')
                ->deliver("
                <p>Email:" . $email . ",</p>
                <p>Your volunteer interview details have been successfully saved.</p><br>
                <p>*Note: Please do not reply to this email, as it is a computer-generated email.</p>
                <br>");
        } else {
            // Handle the case where the user email is not set (e.g., user is not authenticated)
            $this->Flash->error(__('User email not found. Please log in.'));
            return $this->redirect(['action' => 'add']);
        }
    }
}
