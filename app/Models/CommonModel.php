<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{
    public function selectRow($table, $where = array())
    {
       $build = $this->db->table($table);
       $build->select('*');
       $build->where($where);
       $result = $build->get();
      //"SELECT * FROM `login` WHERE username = 'admin' ";
      //    echo $this->db->getLastQuery();    
       return $result->getRow();
    }
}