<?php

namespace WebRequest;

class WebRequest {

    private $request = array();
    private $env;
    private $get;
    private $post;
    private $cookie;
    private $files;
    private $server;

    public function __construct() {
        foreach (array_keys($_REQUEST) as $name) {
            $this->request[$name] = true;
        }
        print_r($_REQUEST);
        print_r($this->request);
    }

    /**
     * 
     * @param string $name
     * @return mixed
     */
    public function __get($name) {
        $result = null;
        if (isset($this->request[$name])) {
            $result = filter_input(INPUT_REQUEST, $name);
        }
        return $result;
    }

    public function env() {
        
    }

    public function get() {
        
    }

    public function post() {
        
    }

    public function cookie() {
        
    }

    public function server() {
        
    }

}
