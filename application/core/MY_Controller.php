<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 15/01/15
 * Time: 4:37 PM
 */

class MY_Controller extends CI_Controller{

    protected $data = array();      // parameters for view components
    protected $id;		  // identifier for our content
    protected $choices = array(// our menu navbar
        'Home' => '/', 'Gallery' => '/gallery', 'About' => '/about'
    );

    // the menu bar array
    protected $menu = array(
        array('page' => 'home','route' => '/', 'class' => ''), array('page' => 'about', 'route' => '/about', 'class' => ''),
        array('page' => 'hairstyle', 'route' => '/hairstyle', 'class' => ''), array('page' => 'news', 'route' => '/news', 'class' => ''),
        array('page' => 'contact','route' => '/contact','class' => '')
    );

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct()
    {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'ZiZurz Website Template';
        $this->data['banner'] = ""; //banner by default is not included
    }
    /**
     * Render this page
     */
    function render()
    {
        //$this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['bodyContent'] = $this->parser->parse($this->data['pagebody'], $this->data, true);//$this->load->view($this->data['pagebody'], $this->data, true);
        $this->data['data'] = &$this->data;
        $this->parser->parse('template', $this->data);
    }
}