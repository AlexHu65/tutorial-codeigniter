<?php
/**
 * Created by PhpStorm.
 * User: alejandro.chavez
 * Date: 2/8/2018
 * Time: 11:35 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');


class Pages extends CI_Controller
{
    public function view($page = 'home')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer', $data);
    }
}