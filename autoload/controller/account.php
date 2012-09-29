<?php

namespace controller;

class account {
  public function login() {
    $title    = 'Login';
    $content = 'login.html';
    \F3::set('content', $content);
    \F3::set('title', $title);
    echo \Template::serve('layout.html');
    return;
  }
  public function loginpost() {
    $POST     = \F3::get('POST');
    $user     = new \Axon('User');
    $user->load(array('email=:email',array(':email'=>$POST['email'])));
    $password = $user->dry() ? NULL : $POST['password'];

    $lib      = new \PasswordLib\PasswordLib();
    $hash     = $lib->createPasswordHash($POST['password']);
    $isGood   = $lib->verifyPasswordHash($password, $hash);
    // If no user was found or if the hash is not good, fail authentication and re-prompt with login.html.
    if ($user->dry() || !$isGood) {
      $messages = array('Authentication failed. Please try again.');
      \F3::set('messages', $messages);
      $this->login();
      return;
    }
    \F3::set('SESSION.user', array('name'=>$user->name, 'email'=>$user->email, 'admin'=>$user->admin));
    \F3::reroute('/');
    return;
  }
  public function register() {
    $title   = 'Register';
    $content = 'register.html';
    \F3::set('content', $content);
    \F3::set('title', $title);
    echo \Template::serve('layout.html');
    return;
  }
  public function registerpost() {
    $POST     = \F3::get('POST');
    $user     = new \Axon('User');
    $user->load(array('email=:email',array(':email'=>$POST['email'])));
    if (!$user->dry()) {
      $messages = array('Email already in use.');
      \F3::set('messages', $messages);
      $this->register();
      return;
    }
    if ($POST['email'] !== $POST['emailagain']) {
      $messages = array('Emails must match.');
      \F3::set('messages', $messages);
      $this->register();
      return;
    }
    if ($POST['password'] !== $POST['passwordagain']) {
      $messages = array('Passwords must match.');
      \F3::set('messages', $messages);
      $this->register();
      return;
    }
    $user->email    = $POST['email'];
    $lib  = new \PasswordLib\PasswordLib();
    $user->password = $lib->createPasswordHash($POST['password']);
    $user->save();
    $messages       = array('Registration successful. Please check your email for the activation link.');
    /*
    $user = \F3::get('email_user');
    $pass = \F3::get('email_password');
    $mail = new \SMTP('smtp.gmail.com',465,'SSL',$user,$pass);
    $mail->set('to','<'.$POST['email'].'>');
    $mail->set('from','<noreply@myblog.com>');
    $mail->set('subject','Welcome');
    $mail->send('test');
    var_dump($mail->log);
     */
    \F3::set('messages', $messages);
    $this->register();
    return;
  }
  public function logout() {
    \F3::clear('SESSION');
    \F3::reroute('/');
    return;
  }
  public static function isAdmin() {
    return \F3::get('SESSION.user.admin');
  }
}
