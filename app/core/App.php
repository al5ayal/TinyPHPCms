<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */
/**
 * Description of App
 *
 * @author cybolt
 */
class App {
    
    protected $controller = 'home';
    protected $method = 'index';
    protected $paramaters = [];
    
    public function __construct() {
        
        $url = $this->parseUrl();
        // checking the url matching any controllers file existence
        if($url !== NULL){
            if(file_exists('./app/controllers/'.ucwords($url[0]).'.php')){
                $this->controller = ucwords($url[0]);
                //remove it from the array
                unset($url[0]);
            }else{
                $this->controller = "NotFoundPage";
                unset($url[0]);
            }
        }else{
          $this->controller = 'Home';  
        }
        // calling it
        require_once './app/controllers/'. ucwords($this->controller).'.php';
        $this->controller = new $this->controller;
        //print_r($this->controller);
        //checking if the second section of the url is exist as a function in the controller
        if(isset($url[1])){

            if(method_exists($this->controller, $url[1])){
                //then we set $this->method to the gotten one
                $this->method = $url[1];
                //then unset to just get what is left of the url
                unset($url[1]);
            }
        }
        //Whats left is the params so but we need to ckeck if its empty or not 
        $this->paramaters = $url ? array_values($url) : [];
        call_user_func_array(array($this->controller, $this->method), $this->paramaters);
    }
    //to split and orgnize the url
    public function parseUrl(){
        //the variable of the url to be parsed
        if(isset($_GET['url'])){
            //Spliting and trims the url from $GET ;
            $url = [];
            $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            $arr = ['show', 'cat', 'news', 'watch', 'contact', 'about'];
            $numbers = preg_replace('/[^0-9]/', '', $url[0]);
            $letters = preg_replace('/[^a-zA-Z]/', '', $url[0]);
            if(in_array($letters, $arr)){
                 $url[0] = $letters;
                 $url[1] = !empty($url[1]) ? $url[1] : 'index';
                 $url[2] = $numbers;
                 return $url;
            }else{
                return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }
        }
        
    }
}
