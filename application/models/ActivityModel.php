<?php
Class ActivityModel extends CI_Model
{
    private $table = 'activities';

    function select($data)
    {
        $query = $this->db->get($this->table, $data);

        return $query->result();
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}
?>
