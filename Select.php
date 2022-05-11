<?php

require_once('app/db.php');

class Select
{

    public function __construct()
    {
        $this->db = new DB_connet();
        $this->db = $this->db->return_db();
    }


    public function startSearch($search)
    {

        $req = "SELECT id, nom from signe WHERE nom like '$search%'";
        $req = $this->db->query($req);
        $stmt = $req->fetchAll();
        return $stmt;
    }

    public function searchReq($search)
    {

        // echo "<pre>";
        // var_dump($search);
        // echo "</pre>";

        $req = "SELECT id, nom from signe WHERE nom LIKE '%$search%'";
        $req = $this->db->query($req);
        $stmt = $req->fetchAll();
        //echo (json_encode($stmt));

        return $stmt;
    }

    public function getAll()
    {
        $id = $_GET['id'];
        $req = "SELECT * from signe WHERE id = ?";
        $req = $this->db->prepare($req);
        $req->execute(array(
            $id
        ));
        $stmt = $req->fetchAll();
        return $stmt;
    }
}
