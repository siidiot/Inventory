<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Gilang
 * Date: 5/8/13
 * Time: 9:16 AM
 * To change this template use File | Settings | File Templates.
 */

class Model_app extends CI_Model{
    

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }



}