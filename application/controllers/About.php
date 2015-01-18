<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 15/01/15
 * Time: 4:17 PM
 */

class About extends MY_Controller{

    public function index()
    {
        //set the about icon in the menu as the selected menu
        $this->menu[1]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;

        //inject page into template and load
        //$this->load->view('about');
        $this->data['pagebody'] = 'about';
        $this->render();
    }
}