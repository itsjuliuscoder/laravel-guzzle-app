<?php

namespace App\Traits;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;
/**
 * Trait for making api connection with GuzzleHttp
 */
trait GuzzleTrait
{

  public $gClient;
  private $accessToken;
  public $getPostErr;
  public $getGetErr;


  public function initGuzzle()
  {
    $this->initToken();
    $this->gClient = new Client([
       'base_uri' => config('aiptconfig.aipt_api_url'),
     ]); //GuzzleHttp\Client
  }

  public function initToken()
  {
    if(isset($_COOKIE['token'])){
      $this->accessToken = $_COOKIE['token'];
    }
  }
  
  /**
   * Post Request without Authorization
   */
  public function sendPost($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('POST', $url, [
                'json' => $formData
           ]);

       } catch(\GuzzleHttp\Exception\ClientException $e) {

           $this->getPostErr = json_decode($e->getResponse()->getBody());
        
           return null;
           
       }

       return $result;
  }

  /**
   * Post Request Header with Authorization for Subject
   */
  public function sendPostWithHeaderSubject($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('POST', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization'=>'Bearer '.$this->accessToken
                ],
                'multipart' => [
                    
                    [
                        'name' => 'subject_title',
                        'contents' => $formData['subject_title']
                    ],
                    [
                        'name' =>   'subject_description',
                        'contents' =>   $formData['subject_description']
                    ],
                    [
                        'name' =>   'subject_img',
                        'Mime-Type'=>   $formData['image_mime'],
                        'filename' => $formData['image_name'],
                        'contents' => fopen($formData['path'], 'r'),
                    ],
                    [
                        'name' =>   'subject_url',
                        'contents' =>   $formData['subject_url']
                    ]
                    
                ]
           ]);
       } catch(\GuzzleHttp\Exception\ClientException $e) {
           $this->getPostErr = json_decode($e->getResponse()->getBody());
           return $this->getPostErr;
       }
       return $result;
  }

  /**
   * Post Request Header with Authorization for Topic
   */
  public function sendPostWithHeaderTopic($url, $formData)
  { 
       //attempt API authentication
       try {
           $result = $this->gClient->request('POST', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization'=>'Bearer '.$this->accessToken
                ],
                'multipart' => [
                    
                    [
                        'name' => 'topic',
                        'contents' => $formData['topic']
                    ],
                    [
                        'name' =>   'topic_description',
                        'contents' =>   $formData['topic_description']
                    ]
                    
                ]
           ]);
       } catch(\GuzzleHttp\Exception\ClientException $e) {
           $this->getPostErr = json_decode($e->getResponse()->getBody());
           return $this->getPostErr;
       }
       return $result;
  }

  /**
   * Post Request Header with Authorization for Article
   */
  public function sendPostWithHeaderArticle($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('POST', $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization'=>'Bearer '.$this->accessToken
                ],
                'multipart' => [
                    
                    [
                        'name' => 'title',
                        'contents' => $formData['title']
                    ],
                    [
                        'name' =>   'description',
                        'contents' =>   $formData['description']
                    ],
                    [
                        'name' =>   'description',
                        'Mime-Type'=>   $formData['image_mime'],
                        'filename' => $formData['description'],
                        'contents' => fopen($formData['path'], 'r'),
                    ],
                    
                ]
           ]);
       } catch(\GuzzleHttp\Exception\ClientException $e) {
           $this->getPostErr = json_decode($e->getResponse()->getBody());
           return $this->getPostErr;
       }
       return $result;
  }

  /**
   * Get Request without Authorization
   */
  public function sendGet($url)
  {
    
    try {
        $result = $this->gClient->request('GET', $url);

    } catch(\GuzzleHttp\Exception\ClientException $e) {
        $this->getGetErr = json_decode($e->getResponse()->getBody());
        return null;
    }

    return $result;

  }


  /**
   * Open a file 
   */
  
  /**
   * Get Request with Authorization
   */
  public function sendGetWithHeader($url)
  {
    
    //$header = array();
    try {
        $result = $this->gClient->request('GET', $url, [
            'headers' => [
                'Authorization'=>'Bearer '.$this->accessToken,
                // 'Content-Type' =>'image/jpeg',
            ], [
                'stream' => true,
            ]
       ]);
       
    } catch(\GuzzleHttp\Exception\ClientException $e) {
        $this->getGetErr = json_decode($e->getResponse()->getBody());

        return $this->getGetErr;
    }
    //\GuzzleHttp\Exception\ConnectException check

    return $result;
  }
  
  /**
   * Reads an Image file 
   */
  public function sendGetFile($url){
     
    try {
        
        $result = $this->gClient->request('GET', $url, [
            'headers' => [
                'Authorization'=>'Bearer '.$this->accessToken,
                'Content-Type' => [
                    'image/jpg',
                    'image/png',
                    'image/gif',
                    
                ],
                'Accept' => [
                    'image/jpg',
                    'image/png',
                    'image/gif',
                ],
            ], [
                'stream' => true,
            ]
       ]);   
       
    } catch(\GuzzleHttp\Exception\ClientException $e) {

        $this->getGetErr = json_decode($e->getResponse()->getBody());

        return $this->getGetErr;
    }

    return $result;

  }


  /**
   * Put Request without Authorization
   */
  public function sendPut($url, $formData)
  {
        
       //attempt API authentication
       try {
           $result = $this->gClient->request('PUT', $url, [
                'json' => $formData
           ]);

       } catch(\GuzzleHttp\Exception\ClientException $e) {

           $this->getPutErr = json_decode($e->getResponse()->getBody());

           return NULL;
            
       }

       return $result;
  }

  /**
   * Put Request with Authorization for Subject
   */
  public function sendPutWithHeaderSubject($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('PUT', $url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization'=>'Bearer '.$this->accessToken
            ],
            'multipart' => [
                [
                    'name' => 'subject_title',
                    'contents' => $formData['subject_title']
                ],
                [
                    'name' =>   'subject_description',
                    'contents' =>   $formData['subject_description']
                ],
                [ 
                    'name' =>   'subject_url',
                    'contents' =>   $formData['subject_url']
                ]
            ]
           ]);

       } catch(\GuzzleHttp\Exception\ClientException $e) {

           $this->getPutErr = json_decode($e->getResponse()->getBody());

           return $this->getPutErr;
            
       }

       return $result;
  }

  /**
   * Put Request with Authorization for Topic 
   */
  public function sendPutWithHeaderTopic($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('PUT', $url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization'=>'Bearer '.$this->accessToken
            ],
            'multipart' => [
                
                [
                    'name' => 'topic',
                    'contents' => $formData['topic']
                ],
                [
                    'name' =>   'topic_description',
                    'contents' =>   $formData['topic_description']
                ],
                // [
                //     'name' =>   'subject_url',
                //     'contents' =>   $formData['subject_url']
                // ]
                
            ]
           ]);

       } catch(\GuzzleHttp\Exception\ClientException $e) {

           $this->getPutErr = json_decode($e->getResponse()->getBody());

           return $this->getPutErr;
            
       }

       return $result;
  }

  /**
   * Put Request for Authorization for Article 
   */
  public function sendPutWithHeaderArticle($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('PUT', $url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization'=>'Bearer '.$this->accessToken
            ],
            'multipart' => [
                
                [
                    'name' => 'subject_title',
                    'contents' => $formData['subject_title']
                ],
                [
                    'name' =>   'subject_description',
                    'contents' =>   $formData['subject_description']
                ],
                [
                    'name' =>   'subject_img',
                    'Mime-Type'=>   $formData['image_mime'],
                    'filename' => $formData['image_name'],
                    'contents' => fopen($formData['path'], 'r'),
                ],
                [
                    'name' =>   'subject_url',
                    'contents' =>   $formData['subject_url']
                ]
                
            ]
           ]);

       } catch(\GuzzleHttp\Exception\ClientException $e) {

           $this->getPutErr = json_decode($e->getResponse()->getBody());

           return $this->getPutErr;
            
       }

       return $result;
  }

  /**
   * Put Request for Authorization for Users 
   */
  public function sendPutWithHeaderUser($url, $formData)
  {
       //attempt API authentication
       try {
           $result = $this->gClient->request('PUT', $url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization'=>'Bearer '.$this->accessToken
            ],
            'multipart' => [
                
                [
                    'name' => 'fullname',
                    'contents' => $formData['fullname']
                ],
                [
                    'name' =>   'about',
                    'contents' =>   $formData['about']
                ],
                [
                    'name' =>   'profile_img',
                    'Mime-Type'=>   $formData['image_mime'],
                    'filename' => $formData['image_name'],
                    'contents' => fopen($formData['path'], 'r'),
                ],
                
            ]
           ]);

       } catch(\GuzzleHttp\Exception\ClientException $e) {

           $this->getPutErr = json_decode($e->getResponse()->getBody());

           return $this->getPutErr;
            
       }

       return $result;
  }
}
