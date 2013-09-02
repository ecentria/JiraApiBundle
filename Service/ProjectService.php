<?php

namespace JiraApiBundle\Service;

use Guzzle\Http\Client;
use Guzzle\Http\Exception\BadResponseException;

/**
 * Service class that handles projects.
 */
class ProjectService extends AbstractService
{
    /**
     * Method to retrieve all projects.
     * 
     * @return boolean|array
     */
    public function getAll()
    {
        $url = $this->createUrl('project');

        return $this->getResponseAsArray($url);
    }
}