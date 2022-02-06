<?php if(!defined('BASEPATH')) exit('no direct script access allowed');

class auth_model extends CI_MODEL{

public function cek($in){
  $username = $this->db->escape($in['username']);
  $password = $this->db->escape($in['password']);


  $q_login =$this->db->query("SELECT * FROM login where username= $username AND password= $password ");

  if($q_login->num_rows()>0){
    foreach ($q_login->result() as $data) {
      $session['id'] = $data->id;
      $session['username'] = $data->username;
      $session['nama'] = $data->nama;
      $session['login'] = TRUE;
      $this->session->set_userdata($session);

        // code...
    }

}
if($session['login'] == TRUE)
redirect('beranda');
else
redirect('auth');
}
}
