<?php

/*
 * Alkhayal OOP cms mvc
 * www.al5ayal.com  * 
 */

/**
 * Description of home
 *
 * @author cybolt
 */
class Home  extends Controller{
    
    public function index($name = ''){
        $articles = $this->model('Articles');
        $data['latest_articles'] = $articles->get_latest('chk=1', 'articleid DESC', '9');
        $last_article = $articles->get_last_order_limit('articleid DESC', '1');
        $data['last_artcile'] = $last_article[0];
        $data['others'] = $articles->get_last_order_limit('articleid DESC', '1,4');
        $block1 = $articles->get_latest('catid=1', 'articleid DESC', '1');
        $data['block1'] = $block1[0];
        $kfsuniverst = $articles->get_latest('catid=3', 'articleid DESC', '1');
        $data['kfsuniverst'] = $kfsuniverst[0];
        $data['kfsunivers1'] = $articles->get_latest('catid=3', 'articleid DESC', '1,2');
        $kfsym = $articles->get_latest('catid=2', 'articleid DESC', '1');
        $data['kfsymt'] = $kfsym[0];
        $data['kfsym1'] = $articles->get_latest('catid=2', 'articleid DESC', '1,2');
        $data['second'] = $articles->get_latest('catid=1', 'articleid DESC', '1,2');
        $kfscat5a = $articles->get_latest('catid=5', 'articleid DESC', '1');
        $data['kfscat5a'] = $kfscat5a[0];
        $data['kfscat5rb'] = $articles->get_latest('catid=5', 'articleid DESC', '1,2');
        $kfscat4a = $articles->get_latest('catid=4', 'articleid DESC', '1');
        $data['kfscat4a'] = $kfscat4a[0];
        $data['kfscat4rb'] = $articles->get_latest('catid=4', 'articleid DESC', '1,2');
        $kfscat7a = $articles->get_latest('catid=7', 'articleid DESC', '1');
        $data['kfscat7a'] = $kfscat7a[0];
        $data['kfscat7rb'] = $articles->get_latest('catid=7', 'articleid DESC', '1,2');
        $kfscat6a = $articles->get_latest('catid=6', 'articleid DESC', '1');
        $data['kfscat6a'] = $kfscat6a[0];
        $data['kfscat6rb'] = $articles->get_latest('catid=6', 'articleid DESC', '1,2');
        $kfscat10a = $articles->get_latest('catid=10', 'articleid DESC', '1');
        $data['kfscat10a'] = $kfscat10a[0];
        $data['kfscat10rb'] = $articles->get_latest('catid=10', 'articleid DESC', '1,2');
        $kfscat9a = $articles->get_latest('catid=9', 'articleid DESC', '1');
        $data['kfscat9a'] = $kfscat9a[0];
        $data['kfscat9rb'] = $articles->get_latest('catid=9', 'articleid DESC', '1,2');
        $kfscat13a = $articles->get_latest('catid=13', 'articleid DESC', '1');
        $data['kfscat13a'] = $kfscat13a[0];
        $data['kfscat13rb'] = $articles->get_latest('catid=13', 'articleid DESC', '1,2');
        $kfscat12a = $articles->get_latest('catid=12', 'articleid DESC', '1');
        $data['kfscat12a'] = $kfscat12a[0];
        $data['kfscat12rb'] = $articles->get_latest('catid=12', 'articleid DESC', '1,2');
        $kfscat16a = $articles->get_latest('catid=16', 'articleid DESC', '1');
        $data['kfscat16a'] = $kfscat16a[0];
        $data['kfscat16rb'] = $articles->get_latest('catid=16', 'articleid DESC', '1,2');
        $kfscat14a = $articles->get_latest('catid=14', 'articleid DESC', '1');
        $data['kfscat14a'] = $kfscat14a[0];
        $data['kfscat14rb'] = $articles->get_latest('catid=14', 'articleid DESC', '1,2');
        $kfscat21a = $articles->get_latest('catid=21', 'articleid DESC', '1');
        $data['kfscat21a'] = $kfscat21a[0];
        $data['kfscat21rb'] = $articles->get_latest('catid=21', 'articleid DESC', '1,2');
        $kfscat18a = $articles->get_latest('catid=18', 'articleid DESC', '1');
        $data['kfscat18a'] = $kfscat18a[0];
        $data['kfscat18rb'] = $articles->get_latest('catid=18', 'articleid DESC', '1,2');
        $data['investigats'] = $articles->get_latest('catid=8', 'articleid DESC', '5');
        $data['photos'] = $articles->get_latest('catid=17', 'articleid DESC', '3');
        $data['off3'] = $articles->get_latest('catid=15', 'articleid DESC', '5');
        $data['kfscat19ar'] = $articles->get_latest('catid=19', 'articleid DESC', '5');
        $data['kfscat20ar'] = $articles->get_latest('catid=20', 'articleid DESC', '5');
        
        $videos = $this->model('Video');
        $data['vbig'] = $videos->select_limit('6');
        $advs = $this->model('Advertise');
        $data['main_adv1'] = $advs->get_advs('main1');
        $data['main_adv2'] = $advs->get_advs('main2');
        $data['main_adv3'] = $advs->get_advs('main3');
        $data['adv_side1'] = $advs->get_advs('side1');
        $data['adv_side2'] = $advs->get_advs('side2');
        $data['adv_side3'] = $advs->get_advs('side3');
        $data['categories'] = $this->model('Categories')->Get_All_Categories();
        $data['adv_sidetall'] = $advs->get_advs('sidetall');
        $data['property'] = $this->setting['meta'];
        $data['title'] = 'الرئيسية';
        $this->view('header', $data);
        $this->view('home', $data);
        $this->view('footer');
    }
}
