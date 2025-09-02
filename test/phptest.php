<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Eco_stays extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('custom_db'));
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");
    }

    function index()
    {
        redirect('eco_stays/stays');
    }

    function stays($origin = '')
    {
      //  error_reporting(E_ALL);  ini_set('display_errors', '1');
        $page_data = array();
?>