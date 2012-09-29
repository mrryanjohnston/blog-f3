<?php
setlocale(LC_ALL, 'en_US.UTF8');
date_default_timezone_set('America/Los_Angeles');
// Set your $sitename and $twittername variables in this file:
require_once __DIR__.'/../../config/blog.php';
// Include the fatfree library and the markdown library, as well.
require_once __DIR__.'/../../fatfree/lib/base.php';
require_once __DIR__.'/../../markdown/markdown.php';
F3::set('DB',new DB($dbinfo));
F3::set('GET',F3::scrub($_GET));
F3::set('POST',F3::scrub($_POST));
F3::set('AUTOLOAD', '../autoload/');
F3::set('CACHE', '../cache/');
F3::set('TEMP', '../tmp/');
F3::set('UI', 'ui/');
// Site-specific details
F3::set('sitename', $sitename);
F3::set('disqusname', $disqusname);
// Get twitter profile info and cache it with apc
// via http://stackoverflow.com/questions/4123823/how-to-cache-the-twitter-api-result
if (apc_exists('twitter_result')) {
  $twitter_result = apc_fetch('twitter_result');
} else {
  $twitter_result = file_get_contents("https://api.twitter.com/1/users/show.json?screen_name=$twittername&include_entities=true");
  $twitter_result = json_decode($twitter_result);
  $twitter_result->profile_image_url = str_replace('_normal', '_bigger', $twitter_result->profile_image_url);
  apc_store('twitter_result', $twitter_result, 10 * 60); // store for 10 mins
}
F3::set('twitter_profile', $twitter_result);
F3::route('GET /', '\controller\post->getLatest');
F3::route('POST /', '\controller\post->edit');
F3::route('GET /post', '\controller\post->getList');
F3::route('POST /post', '\controller\post->create');
F3::route('GET /post/@post','\controller\post->get');
F3::route('POST /post/@post','\controller\post->edit');
F3::route('GET /login','\controller\account->login');
F3::route('POST /login','\controller\account->loginpost');
F3::route('GET /logout','\controller\account->logout');
/*
F3::route('GET /register','\controller\account->register');
F3::route('POST /register','\controller\account->registerpost');
 */
F3::run();
