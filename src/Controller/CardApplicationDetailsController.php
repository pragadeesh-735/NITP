<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;

/**
 * CardApplicationDetails Controller
 *
 * @property \App\Model\Table\CardApplicationDetailsTable $CardApplicationDetails
 * @method \App\Model\Entity\CardApplicationDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardApplicationDetailsController extends AppController
{
    public function add()
    {
        $this->viewBuilder()->setLayout('layout');

        $cardApplicationDetail = $this->CardApplicationDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $cardApplicationDetail = $this->CardApplicationDetails->patchEntity($cardApplicationDetail, $this->request->getData());


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
                    $targetPath                                = 'cardapplication/';
                    $targetFile                                = $targetPath . $newfile;
                    $cardApplicationDetail->upload_reciept           = $newfile;
                    move_uploaded_file($tempFile, $targetFile);
                }
            } else {
                $cardApplicationDetail->upload_reciept        = $this->request->getData('upload_reciept');
            }

            if ($this->CardApplicationDetails->save($cardApplicationDetail)) {
                // $this->Flash->success(__('The card application detail has been saved.'));

                //email send
                return $this->redirect(['action' => 'success']);
            }
            $this->Flash->error(__('The card application detail could not be saved. Please, try again.'));
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
                ->setFrom(['pragadeeshpragadeesh23@gmail.com' => 'The card application success'])
                ->setTo($email)
                ->setEmailFormat('html')
                ->setSubject('The card application detail has been saved.')
                ->deliver("
                <p>Email: " . $email . ",</p>
                <p>Your Card Application details have been successfully saved.</p><br>
                <p>*Note: Please do not reply to this email, as it is a computer-generated email.</p>
                <br>");
        } else {
            $this->Flash->error(__('User email not found. Please log in.'));
            return $this->redirect(['action' => 'add']);
        }
    }
}
