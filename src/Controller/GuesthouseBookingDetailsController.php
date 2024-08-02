<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

/**
 * GuesthouseBookingDetails Controller
 *
 * @property \App\Model\Table\GuesthouseBookingDetailsTable $GuesthouseBookingDetails
 * @method \App\Model\Entity\GuesthouseBookingDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GuesthouseBookingDetailsController extends AppController
{

    public function add()
    {
        $this->viewBuilder()->setLayout('layout');

        $guesthouseBookingDetail = $this->GuesthouseBookingDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $guesthouseBookingDetail = $this->GuesthouseBookingDetails->patchEntity($guesthouseBookingDetail, $this->request->getData());
            if ($this->GuesthouseBookingDetails->save($guesthouseBookingDetail)) {
                // $this->Flash->success(__('The guesthouse booking detail has been saved.'));

                return $this->redirect(['action' => 'success']);
            }
            $this->Flash->error(__('The guest house booking detail could not be saved. Please, try again.'));
        }
        $this->set(compact('guesthouseBookingDetail'));
    }


    public function success()
    {
        $this->viewBuilder()->setLayout('layout');
        $user = $this->request->getAttribute('identity');
        $email = $user['email'];
        // print_r($user['email']);
        // exit();
        if (isset($email)) {
            $mailer = new Mailer('default');
            $mailer
                ->setTransport('default')
                ->setFrom(['pragadeeshpragadeesh23@gmail.com' => 'The guesthouse booking success'])
                ->setTo($email)
                ->setEmailFormat('html')
                ->setSubject('The guesthouse booking')
                ->deliver("
                <p>Email:" . $email . ",</p>
                <p>The guesthouse booking detail have been successfully saved.</p><br>
                <p>*Note: Please do not reply to this email, as it is a computer-generated email.</p>
                <br>");
        } else {
            // Handle the case where the user email is not set (e.g., user is not authenticated)
            $this->Flash->error(__('User email not found. Please log in.'));
            return $this->redirect(['action' => 'add']);
        }
    }
}
