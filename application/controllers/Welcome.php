<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		/* Get the bottom four images along with thier tags and descriptions */
		$dirs = $this->directories->bottomFourImages();

		$sources = array();
		foreach($dirs as $directory){
			$sources[] = array('image' => '../../public/images/' . $directory['directory'], 'titletag' => $directory['tag'], 'contenttext' => $directory['description']);
		}

		// database stores stories in backwards order, need to flip around the array
		$reorderedSources = array();
		for($i = count($sources)-1; $i >= 0 ; $i--){
			$reorderedSources[] = $sources[$i];
		}

		$this->data['trends'] = $reorderedSources;


		/* Get the top story for the main page */
		$featuredStory = $this->directories->topStory();

		$this->data['featuredtitle'] = $featuredStory['title'];
		$this->data['featuredcontent'] = $featuredStory['information'];


		//set the home icon as the selected icon in the menu
		//$this->load->view('welcome');
		$this->menu[0]['class'] = 'class="selected"';
		$this->data['menu'] = $this->menu;

		// put inject content into template and load view
		$this->data['pagebody'] = 'welcome';

		//load banner section for the page
		$this->data['banner'] = $this->load->view('banner',"", true);
		$this->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */