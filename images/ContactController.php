<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Routing\Router;
use Cake\Mailer\Email;
use Cake\Event\Event;
use Cake\View\View;
use Cake\View\ViewBuilder;

use App\Form\ContactForm;


class ContactController extends AppController {

  public function index(){
    $contact = new ContactForm();
    if ($this->request->getData()) {
        $this->set($this->request->getData());
    }
    $this->set('contact', $contact);
  }

  public function confirm(){
    $contact = new ContactForm();

    if ($this->request->getData()) {
        $this->set('contact', $contact);
        if (!$contact->execute($this->request->getData())) {
            $errors = $contact->getErrors();
            $this->set('errors', $errors);
            $this->render('index');
        }
    } else {
      $this->redirect(['action' => 'index']);
    }
  }

  public function transact(){
    if (!$this->request->getData()) {
      $this->redirect(['action' => 'index']);
    }

    $contact = new ContactForm();
    $errors = $contact->getErrors();

    if ($this->request->is('post')) {
        // メールを送信する
        $email = new Email('default');
        // 入力者へのメール
        // $email->setfrom(['form@cloudsmith.co.jp' => '株式会社クラウドスミス']);
        $email->setTo($this->request->getData('mail'));
        $email->setEmailFormat('text');
        // $email->setSubject('[クラウドスミス]お問い合わせ受付完了のお知らせ');
        $email->setViewVars(['value' => $this->request->getData()]);
        $email->viewBuilder()->setLayout('user');
        $email->viewBuilder()->setTemplate('contact');
        $email->send();

        // 管理者へのメール
        $email->setfrom(['contact@cloudsmith.co.jp' => '株式会社クラウドスミス']);
        $email->setTo('s.shimomura@cloudsmithit.onmicrosoft.com');
        // $email->setTo('syota.shimomura@cloudsmithit.onmicrosoft.com');
        $email->setEmailFormat('text');
        // $email->setSubject('[クラウドスミス]お問い合わせ受付完了のお知らせ');
        $email->setViewVars(['value' => $this->request->getData()]);
        $email->viewBuilder()->setLayout('admin');
        $email->viewBuilder()->setTemplate('admin');
        $email->send();
    }
    $this->redirect(['action' => 'finish']);
  }

  public function finish(){

  }

}