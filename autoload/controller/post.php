<?php

namespace controller;

class post {
  // Found here: http://cubiq.org/the-perfect-php-clean-url-generator
  public function slugify($str, $delimiter='-') {
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
  }
  public function create() {
    // Silently do nothing if user isn't admin.
    if (!\controller\account::isAdmin()) {
      $this->getList();
      return;
    }
    $POST     = \F3::get('POST');
    $post     = new \Axon('posts');
    $slug     = $this->slugify($POST['title']);
    $post->load(array('slug=:slug',array(':slug'=>$slug)));
    if (!$post->dry()) {
      $messages = array('Sorry, a post with this slug already exists. Try to be a little more creative with your title.');
      \F3::set('messages', $messages);
      $this->getList();
      return;
    }
    $post->title  = $POST['title'];
    $post->body   = $POST['body'];
    $post->author = \F3::get('SESSION.user.name');
    $post->date   = time();
    $post->slug   = $slug;
    $post->save();
    \F3::reroute('/post/'.$slug);
    return;
  }
  public function getList() {
    // If there's a 'page' number in the get request, return the offset
    $page    = \F3::get('GET.page');
    if (!is_numeric($page) || !$page || $page < 0) {
      $page = 0;
    } else {
      $page--;
    }
    $posts   = new \Axon('posts');
    // This is the number of pages to use pagination for.
    $pages   = ceil(count($posts->find())/10) - 1;
    // If the current requested page is more than the amount of pages, set it to the max page.
    if ($page > $pages)
      $page  = $pages;
    $posts   = $posts->find(NULL,'date DESC',10,$page*10);
    foreach($posts as $post) {
      // Trim at 260 chars until a breaking character
      // Found here: http://stackoverflow.com/a/1233329
      if (preg_match('/^.{1,260}\s/s', $post->body, $match)) {
        $body       = $post->body;
        $post->body = $match[0];
        // If this is trimmed, add an elipses
        if (strlen($post->body) < strlen($body)) {
          $post->body .= '...';
        }
      }
    }
    $title   = 'Posts';
    $content = 'posts.html';
    \F3::set('page', $page);
    \F3::set('pages', $pages);
    \F3::set('posts', $posts);
    \F3::set('content', $content);
    \F3::set('title', $title);
    echo \Template::serve('layout.html');
    return;
  }
  public function get() {
    $post      = new \Axon('posts');
    $requested = \F3::scrub(\F3::get('PARAMS.post'));
    $post->load(array('slug=:slug',array(':slug'=>$requested)));
    if($post->dry()) {
      \F3::error(404);
      return;
    }
    //Render post template
    $title   = $post->title;
    $content = 'post.html';
    $post->copyTo('post');
    \F3::set('content', $content);
    \F3::set('title', $title);
    echo \Template::serve('layout.html');
  }
  public function getLatest() {
    $post    = new \Axon('posts');
    $post    = $post->findone(NULL,'date DESC');
    if (!$post) {
      $content = 'nothing.html';
    } else {
      $content = 'post.html';
    }
    $title   = 'Blog';
    \F3::set('post', $post);
    \F3::set('content', $content);
    \F3::set('title', $title);
    echo \Template::serve('layout.html');
    return;
  }
  public function edit() {
    $post = new \Axon('posts');
    if (\F3::scrub(\F3::get('PARAMS.post'))) {
      $requested = \F3::scrub(\F3::get('PARAMS.post'));
    } else {
      $edit      = $post->findone(NULL,'date DESC');
      $requested = $edit->slug;
    }
    $post->load(array('slug=:slug',array(':slug'=>$requested)));
    if($post->dry()) {
      \F3::error(404);
      return;
    }
    if (\controller\account::isAdmin()) {
      $post->title = \F3::get('POST.title'); 
      $post->body  = \F3::get('POST.body'); 
      $post->save();
      \F3::set('message', 'Article Updated!');
    }
    $title   = $post->title;
    $content = 'post.html';
    $post->copyTo('post');
    \F3::set('content', $content);
    \F3::set('title', $title);
    echo \Template::serve('layout.html');
    return;
  }
}
