<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Setting_Model
 *
 * @author cybolt
 */
class Setting_Model extends Model{
    public function get_settings(){
        $settings = $this->select('', 'setting');
        return array_column($settings, 'value','varname');
    }
}
