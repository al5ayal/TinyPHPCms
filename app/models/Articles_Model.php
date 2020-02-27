<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Articles_Model
 *
 * @author cybolt
 */
class Articles_Model extends Model{
    
    //check if the article exist Grap the article with id
    public function get_article($id){
        $article_exist = $this->check_exist('article',"articleid = $id");
        if($article_exist == 1){
            return $this->select_where('*', 'article', "articleid = {$id}");
        }else{
            return null;   
        }
    }
    //getting the latest articles on where condition
    public function read_also_articles($catid){
        return $this->select('', "article WHERE catid={$catid} ORDER BY articleid DESC LIMIT 6");
    }
    
    //getting the latest articles on where condition
    public function get_last_order_limit($order, $limit){
        return $this->select('', "article ORDER BY {$order} LIMIT {$limit}");
    }
    
      //getting the latest articles on where condition
    public function get_latest($where, $order, $limit){
        return $this->select('', "article WHERE {$where} ORDER BY {$order} LIMIT {$limit}");
    }
}
