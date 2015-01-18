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
        // get the top articles
        $news = $this->directories->recentNews();

        $clips = array();
        foreach($news as $article){
            $clips[] = array('title' => $article['title'], 'information' => $article['information']);
        }


        $this->data['newsfeed'] = $clips;



        //set the news icon as the selected icon
        $this->menu[3]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;

        //inject page into template and load
        //$this->load->view('news');
        $this->data['pagebody'] = 'news';
        $this->render();
    }
}