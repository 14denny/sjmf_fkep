<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: denny
 * Date: 26/05/19
 * Time: 22:54
 */

class ViewMdl extends CI_Model
{

    public function loadView($view, $data=NULL){
        // $userdata = $this->UserMdl->getLoggedUser();
        // if (!isset($data)){
        //     $data = array('userdata' => $userdata);
        // } else {
        //     $data['userdata'] = $userdata;
        // }
        // Load subview
        $body = $this->load->view($view, $data, TRUE);
        $view = str_replace('/', '_', $view);
        $maindata = array(
            // 'userdata' => $userdata,
            'body' => $body,
            'sel_list' => 'ls_'.$view
        );
        $this->load->view('view_base', $maindata);
    }
}
