<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Categories
 *
 * @author cybolt
 */
class Categories_Model extends Model{
    
   public function Get_All_Categories(){
       return $this->select('', 'block');
   }
    
}