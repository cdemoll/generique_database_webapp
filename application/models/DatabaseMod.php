<?php

/**
 * Created by PhpStorm.
 * User: benam
 * Date: 28/01/2019
 * Time: 09:06
 */
class DatabaseMod extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->generique();
    }

    public function GetAllEnseignant()
    {
        return $this->db->query("SELECT * FROM enseignant");
    }

    public function DeleteEnseignant($id)
    {
        return $this->db->query("DELETE FROM enseignant WHERE id='$id'");
    }
}