<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 15/01/15
 * Time: 4:18 PM
 */

class News extends MY_Controller{

    public function index()
    {

        $news = $this->directories->recentNews();

        $clips = array();
        foreach($news as $article){
            $clips[] = array('title' => $article['title'], 'information' => $article['information']);
        }


        $this->data['newsfeed'] = $clips;




        $this->menu[3]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;
        //$this->load->view('news');
        $this->data['pagebody'] = 'news';
        $this->render();
    }
}