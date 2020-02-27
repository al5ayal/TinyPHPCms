<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of NotFoundPage
 *
 * @author cybolt
 */
class NotFoundPage extends Controller{
    //put your code here
    public function index(){
        $this->view('notfound', []);
    }
}
