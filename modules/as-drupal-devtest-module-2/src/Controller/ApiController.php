<?php

/**
 * @file
 * Contains \Drupal\api_consumer\Controller\ApiController.php
 */

/**
 * This is the file you'll mostly be working in. Remember to not overthink things.
 */

//namespace Drupal\api_consumer\ApiController;
namespace Drupal\api_consumer\Controller;

use Drupal\Core\Controller\ControllerBase;

class ApiController extends ControllerBase
{
    protected $api_uri = 'http://adultswim-draco-devtest-api.dev.services.ec2.dmtio.net:3000/api/v1/video';


    public function fetch ($uri)
    {

    $json = file_get_contents($uri);
    $obj = json_decode($json);

    return $obj; 
    // Something important goes here!
    // HINT: we're fetching JSON and returning it to the template
    }

    public function content()
    {
        $videos = $this->fetch($this->api_uri);

        return array (
            '#theme' => 'show_list',
            '#videos' => $videos
        );
    }

    public function show($id)
    {
        $video = $this->fetch($this->api_uri . '/' . $id);

        return array (
            '#theme' => 'show_single',
            '#video' => $video
        );
    }
}
