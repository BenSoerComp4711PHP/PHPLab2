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
        //set the contact in the menu as the selected page
        $this->menu[4]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;

        //inject page into the template and load
        //$this->load->view('contact');
        $this->data['pagebody'] = 'contact';
        $this->render();
    }
}