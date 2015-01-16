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
        $this->menu[3]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;
        //$this->load->view('news');
        $this->data['pagebody'] = 'news';
        $this->render();
    }
}