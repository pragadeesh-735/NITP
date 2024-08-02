<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;


class GetTranscriptDetailsController extends AppController
{

    // public function add()
    // {
    //     $getTranscriptDetail = $this->GetTranscriptDetails->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $getTranscriptDetail = $this->GetTranscriptDetails->patchEntity($getTranscriptDetail, $this->request->getData());
    //         if ($this->GetTranscriptDetails->save($getTranscriptDetail)) {
    //             $this->Flash->success(__('The get transcript detail has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The get transcript detail could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('getTranscriptDetail'));
    // }

    public function add()
    {
        $this->viewBuilder()->setLayout('layout');

        $getTranscriptDetail = $this->GetTranscriptDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $getTranscriptDetail = $this->GetTranscriptDetails->patchEntity($getTranscriptDetail, $this->request->getData());


            $upload_reciept  = $this->request->getData('upload_reciept');
            if ($upload_reciept->getClientFilename() != '') {

                $name    = $upload_reciept->getClientFilename();
                $type    = $upload_reciept->getClientMediaType();
                $size    = $upload_reciept->getSize();
                $tmpName = $upload_reciept->getStream()->getMetadata('uri');
                $error   = $upload_reciept->getError();

                if ($name != '' && $error == 0) {
                    $file                                      = $name;
                    $array                                     = explode('.', $file);
                    $fileExt                                   = $array[count($array) - 1];
                    $current_time                              = date('Y_m_d_H_i_s');
                    $newfile                                   = "Reciept" . "_" . $current_time . "." . $fileExt;
                    $tempFile                                  = $tmpName;
                    $targetPath                                = 'GetTranscript/';
                    $targetFile                                = $targetPath . $newfile;
                    $getTranscriptDetail->upload_reciept           = $newfile;
                    move_uploaded_file($tempFile, $targetFile);
                }
            } else {
                $getTranscriptDetail->upload_reciept        = $this->request->getData('upload_reciept');
            }

            if ($this->GetTranscriptDetails->save($getTranscriptDetail)) {
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
                ->setFrom(['pragadeeshpragadeesh23@gmail.com' => 'The Get Transcript success'])
                ->setTo($email)
                ->setEmailFormat('html')
                ->setSubject('The Get Transcript')
                ->deliver("
                <p>Email:" . $email . ",</p>
                <p>The Get Transcript Detail have been successfully saved.</p><br>
                <p>*Note: Please do not reply to this email, as it is a computer-generated email.</p>
                <br>");
        } else {
            // Handle the case where the user email is not set (e.g., user is not authenticated)
            $this->Flash->error(__('User email not found. Please log in.'));
            return $this->redirect(['action' => 'add']);
        }
    }
}
