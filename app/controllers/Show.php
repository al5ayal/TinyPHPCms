<?php
/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of Show
 *
 * @author cybolt
 */
class Show extends Controller {
       
    public function index($id){
        if(empty($id) OR $id == null ){
            $data['title'] = "العنوان الذى تحاول فتحة غير موجود او تم حذفة";
            $this->view('notfound',$data);
        }else{
            $articles = $this->model('Articles');
            $cats = $this->model('Categories');
            $advs = $this->model('Advertise');
            $data['adv_article1'] = $advs->get_advs('article1');
            $data['adv_article2'] = $advs->get_advs('article2');
            $data['adv_side1'] = $advs->get_advs('side1');
            $data['adv_side2'] = $advs->get_advs('side2');
            $data['adv_side3'] = $advs->get_advs('side3');
            $data['adv_sidetall'] = $advs->get_advs('sidetall');
            $data['cats'] = $cats->Get_All_Categories();
            if($articles->get_article($id) != null){
                //In case the article found
                $data['article'] = $articles->get_article($id);
                $data['readalso'] = $articles->read_also_articles($data['article']->catid);
                $data['top_views'] = $articles->get_last_order_limit('topview DESC', 5);
                $data['lastcomments'] = $articles->get_last_order_limit('lastcomment DESC', 5);
                $data['title'] = $data['article']->title;
                $data['property'] = $this->setting['mainurl'].$data['article']->smallpic;
                $this->setting['description'] = $data['article']->smalldesc;
                $tool = $this->use_tool('DateTime');
                $data['articledate'] = $tool->thatdatetime($data['article']->dateline, 'date');
                $data['articletime'] = $tool->thatdatetime($data['article']->dateline, 'time');
                $this->view('header',$data);
                $this->view('show', $data);
                $this->view('footer');
            } else {
                $data['title'] = "المقال الذى تحاول فتحة غير موجود او تم حذفة";
                $this->view('header', $data);
                $this->view('notfound', $data);
                $this->view('footer');
            }
        }
    }
}
