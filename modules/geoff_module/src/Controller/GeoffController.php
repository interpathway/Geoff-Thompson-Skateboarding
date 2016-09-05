<?php

namespace Drupal\geoff_module\Controller;

use Symfony\Component\HttpFoundation\Response;

class GeoffController
{

  public function geoff()
  {
    return new Response('<h3>Thanks for checking out a Drupal 8 webpage created by my first ever module!</h3><p>This written content lives inside of my custom module directory rather than in the database. What a time to be alive :).');
  }

}






