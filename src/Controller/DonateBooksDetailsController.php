<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;


class DonateBooksDetailsController extends AppController
{

    // public function add()
    // {
    //     $donateBooksDetail = $this->DonateBooksDetails->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $donateBooksDetail = $this->DonateBooksDetails->patchEntity($donateBooksDetail, $this->request->getData());
    //         if ($this->DonateBooksDetails->save($donateBooksDetail)) {
    //             $this->Flash->success(__('The donate books detail has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The donate books detail could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('donateBooksDetail'));
    // }

    public function add()
    {
        $this->viewBuilder()->setLayout('layout');

        $donateBooksDetail = $this->DonateBooksDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $donateBooksDetail = $this->DonateBooksDetails->patchEntity($donateBooksDetail, $this->request->getData());


            $upload_book  = $this->request->getData('upload_book');
            if ($upload_book->getClientFilename() != '') {

                $name    = $upload_book->getClientFilename();
                $type    = $upload_book->getClientMediaType();
                $size    = $upload_book->getSize();
                $tmpName = $upload_book->getStream()->getMetadata('uri');
                $error   = $upload_book->getError();

                if ($name != '' && $error == 0) {
                    $file                                      = $name;
                    $array                                     = explode('.', $file);
                    $fileExt                                   = $array[count($array) - 1];
                    $current_time                              = date('Y_m_d_H_i_s');
                    $newfile                                   = "Reciept" . "_" . $current_time . "." . $fileExt;
                    $tempFile                                  = $tmpName;
                    $targetPath                                = 'DonateBooks/';
                    $targetFile                                = $targetPath . $newfile;
                    $donateBooksDetail->upload_book           = $newfile;
                    move_uploaded_file($tempFile, $targetFile);
                }
            } else {
                $donateBooksDetail->upload_book        = $this->request->getData('upload_book');
            }

            if ($this->DonateBooksDetails->save($donateBooksDetail)) {
                // $this->Flash->success(__('The Get Transcript Details has been saved.'));

                //email send
                return $this->redirect(['action' => 'success']);
            }
            $this->Flash->error(__('The get transcript detail could not be saved. Please, try again.'));
        }
        $this->set(compact('cardApplicationDetail'));
    }



    public function success()
    {
        $this->viewBuilder()->setLayout('layout');
        $user = $this->request->getAttribute('identity');
        $email = $user['email'];

        if (isset($email)) {
            $mailer = new Mailer('default');
            $mailer
                ->setTransport('default')
                ->setFrom(['pragadeeshpragadeesh23@gmail.com' => 'The donate books success'])
                ->setTo($email)
                ->setEmailFormat('html')
                ->setSubject('The Donate Books')
                ->deliver("
                <p>Email:" . $email . ",</p>
                <p>The donate books detail have been successfully saved.</p><br>
                <p>*Note: Please do not reply to this email, as it is a computer-generated email.</p>
                <br>");
        } else {
            // Handle the case where the user email is not set (e.g., user is not authenticated)
            $this->Flash->error(__('User email not found. Please log in.'));
            return $this->redirect(['action' => 'add']);
        }
    }
}
