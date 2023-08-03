<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function noticias()
  {
    $noticias = new \WP_Query([
      'post_type' => 'post',
      'posts_per_page' => '9',
      'post_status' => 'publish'
    ]);

    return $noticias;
  }
}
