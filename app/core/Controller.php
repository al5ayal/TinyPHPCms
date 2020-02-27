<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */
/**
 * Description of Controller
 *
 * @author cybolt
 */
class Controller {
    protected $setting;
    protected $maincats;//getting the main cats fro menu and other staff
    protected $tickers;
    //controller constructor
    function __construct() {
        $this->settings();
        $this->maincats();
        $this->tickers();
        $this->setting['mainurl'] = 'https://mubasherkfs.com/article/';
    }
    //making a method calling the models
    public function model($model){
        //requring that model to be included
        require_once './app/models/'.$model.'_Model.php';
        $model_Model = $model."_Model";
        return new $model_Model();
    }
    // A method to show the view 
    public function view($view, $data = []){
        extract($data);
        $setting = $this->setting;
        $this->setting['mainurl'] = 'https://www.mubasherkfs.com/article/';
        $maincats = $this->maincats;
        $tickers = $this->tickers;
        require_once './app/views/'.$view.'.php';
    }
    //Method to load tools
    public function use_tool($toolname){
        require_once './app/core/tools/'.$toolname.'_Tool.php';
        $tool_got = $toolname.'_tool';
        return new $tool_got();
    }
    //settings
    public function settings(){
        $settings = $this->model('Setting');
        return $this->setting = $settings->get_settings();
    }
    //getting the main categories for the menu
    public function maincats(){
        $cats = $this->model('Categories');
        return $this->maincats = $cats->Get_All_Categories();
    }
    //getting the main categories for the menu
    public function tickers(){
        $ticks = $this->model('Tickers');
        return $this->tickers = $ticks->headtickers();
    }
}
