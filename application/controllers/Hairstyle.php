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

        $dirs = $this->directories->all();

        $sources = array();
        foreach($dirs as $directory){
            $sources[] = array('source' => '../../public/images/' . $directory['directory']);
        }

        $this->menu[2]['class'] = 'class="selected"';
        $this->data['menu'] = $this->menu;

        //$this->load->view('hairstyle');
        $this->data['imagelist'] = $sources;
        $this->data['pagebody'] = 'hairstyle';
        $this->render();
    }
}