<?php

function cek_login(){
    $ci = get_instance();
    if(!$ci->session->userdata('csUsername')){
        echo "<script>alert('Session anda habis atau anda tidak memiliki hak akses!');</script>";
            redirect("login/", "refresh");
    }else{
        $role_id = $ci->session->userdata('csRole');
        $menu =  $ci->uri->segment(2);

        $queryMenu = $ci->db->get_where('user_menu', ['title' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_l' => $role_id, 
            'menu_id' => $menu_id
        ]);

        if($userAccess->num_rows() < 1 ){
            redirect('login/blocked');
        }
    }

}