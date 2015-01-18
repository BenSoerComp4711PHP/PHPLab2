<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 15/01/15
 * Time: 4:17 PM
 */

class Hairstyle extends MY_Controller{

    public function index()
    {
        //get all hairstyle images
        $dirs = $this->directories->all();

        $sources = array();
        foreach($dirs as $directory){
            $sources[] = array('source' => '../../public/images/' . $directory['directory']);
        }

        //set hairstyle as the selected menu item
        $this->menu[2]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;


        //inject page into template and load
        //$this->load->view('hairstyle');
        $this->data['imagelist'] = $sources;
        $this->data['pagebody'] = 'hairstyle';
        $this->render();
    }
}