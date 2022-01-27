<?php

namespace Rams\Apihs\Controllers;
use Rams\Apihs\lib\Controller;
use HubSpot\Factory;
use HubSpot\Client\Crm\Contacts\ApiException;

class HubspotClients extends Controller{

    public $client;
    private $apiResponse = array();
    private $lastId = null;

    public function __construct(){
        parent::__construct();
        $this->client = Factory::createWithApiKey("e616aef5-3a95-4745-9de6-aef65344aa6d");
    }

    public function index(){
        ini_set('max_execution_time', 0); 

        var_dump(date('H:m:s'));
        var_dump("--------------------------------------------- comienza ...........................................");
        $count = 0;
        do {
            # code...
            $responseData = $this->getClients($this->lastId);
            if(count($this->apiResponse) == 0){
                $this->apiResponse = $responseData["results"];
            }else{
                array_merge($this->apiResponse,(array)$responseData["results"]);
            }
            $this->lastId = $responseData["paging"]["next"]["after"];

            // var_dump($responseData["results"]);

            // var_dump($this->lastId);
            // var_dump($count);

            $count++;
        } while ($this->lastId != null);
        var_dump(date('H:m:s'));
        var_dump("*************************************************************************************************");
        var_dump("--------------------------------------------- termina ...........................................");
        var_dump("*************************************************************************************************");




        var_dump($this->apiResponse);
    // } while ($this->apiResponse["paging"]["next"]["after"]);
        // while($apiResponse["paging"]["next"][])

        // foreach($apiResponse["results"] as $clientInfo){
        //     $this->clearNumber($clientInfo["properties"]["phone"]);

        // }
    }

    public function getClients($lastId = null){
        return $this->client->crm()->contacts()->basicApi()->getPage(100, $lastId ?? null, $this->paramsForClients, null, false);
    }

}