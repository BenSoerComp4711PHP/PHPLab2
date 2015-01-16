<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 15/01/15
 * Time: 4:17 PM
 */

class Contact extends MY_Controller{

    public function index()
    {
        $this->menu[4]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;

        //$this->load->view('contact');
        $this->data['pagebody'] = 'contact';
        $this->render();
    }
}