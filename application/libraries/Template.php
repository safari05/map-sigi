<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Eri Safari
 * Date: 9/15/2018
 * Time: 12:42 AM
 * Description : untuk manajemen tampilan view
 */

class Template
{
    var $template_data = array();

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
    {
        $this->CI =& get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}