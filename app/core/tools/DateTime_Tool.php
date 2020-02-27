<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of DateTime_Tool
 *
 * @author cybolt
 */
class DateTime_Tool {
    // FUnction to make and format date and time
    public function thatdatetime($artdate, $towhich){
        if($towhich == 'time'){
            $format_to = 'g:i:s';
            $say = "الساعة";
        }elseif($towhich == 'date'){
            $format_to = 'Y/m/d';
            $say = "بتاريخ";
        }
        //----
        $date_a = date_create($artdate);
        $date_b = date_format($date_a, $format_to);
        $date_c = $say." : ".$date_b;
        return $date_c;
    }
}
