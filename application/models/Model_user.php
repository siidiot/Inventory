<?php

class Model_user extends CI_Model{
   
   function tampil_data()
   {
   	 return $this->db->get('users');
   }
   function get_by($id)
   {
   	  $hasil = $this->db->get_where('users', array('users_id'=>$id));
        return $hasil->row();
   }
   function insert($hasil)
   {
   	  $data =  array(
                 'users_id' => $this->input->post('id'),
                 'nama_lengkap' => $this->input->post('nama'),
                 'alamat'     => $this->input->post('alamat'),
                 'username'     => $this->input->post('username'),
                 'password' 	=> md5($this->input->post('pass')),
                 'foto'       => $hasil['file_name'],
                 'level'        => $this->input->post('level')
   	  	        );
   	  $this->db->insert('users', $data);
   }
   public function edit_foto($hasil)
   {
      $id = $this->uri->segment(3);
      if ( empty($this->input->post('pass'))) {
        $data = array(
              'nama_lengkap'     => $this->input->post('nama'),
              'alamat'           => $this->input->post('alamat'),
              'username'         => $this->input->post('username'),
              'foto'             => $hasil['file_name'],
              'level'            => $this->input->post('level')
            );
      }else{
          $data = array(
              'nama_lengkap'     => $this->input->post('nama'),
              'alamat'           => $this->input->post('alamat'),
              'username'         => $this->input->post('username'),
              'password'         => md5($this->input->post('pass')),
              'foto'             => $hasil['file_name'],
              'level'            => $this->input->post('level')
            );
      }
      
      $this->db->update('users', $data, array('users_id'=>$id));
   }
  public function edit()
   {
      $id = $this->uri->segment(3);
       if ( empty($this->input->post('pass'))) {
      $data = array(
              'nama_lengkap'     => $this->input->post('nama'),
              'alamat'           => $this->input->post('alamat'),
              'username'         => $this->input->post('username'),
              'level'            => $this->input->post('level')
            );
      }else{
           $data = array(
              'nama_lengkap'     => $this->input->post('nama'),
              'alamat'           => $this->input->post('alamat'),
              'username'         => $this->input->post('username'),
              'password'         => md5($this->input->post('pass')),
              'level'            => $this->input->post('level')
            );
      }
      $this->db->update('users', $data, array('users_id'=>$id));
   }
   function delete()
   {
   	 $this->db->delete('users', array('users_id'=>$this->uri->segment(3)));
   }

}