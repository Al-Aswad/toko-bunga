<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UniversalModel extends CI_Model
{

    public function get($table)
    {
        return $this->db->get($table)->result();
    }
    public function get_by_id($table, $id)
    {
        $this->db->from($table);
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    public function delete($table, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }


    public function get_transaction()
    {
        return $this->db->query("SELECT tb.*, c.nama as mobil, d.nama as driver 
          FROM transaksi_bbm as tb 
          INNER JOIN cars as c ON tb.car_id=c.id 
          INNER JOIN drivers as d ON tb.driver_id=d.id")->result();
    }
    public function get_transaction_atk()
    {
        return $this->db->query("SELECT ta.*, a.nama as nama_barang 
          FROM transaksi_atk as ta 
          INNER JOIN atks as a ON ta.atk_id=a.id")->result();
    }

    public function check_user($data)
    {
        $this->db->where('username', $data['username']);
        $user = $this->db->get("users")->row();

        return $user;
    }
}

    /* End of file UniversalModel.php */;
