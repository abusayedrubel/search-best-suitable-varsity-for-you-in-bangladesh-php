<?php
include_once "db/db_class.php";



class ClientCourses
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }



    public function getCourse()
    {
        $query = "SELECT * FROM courses_tbl";
        $getCrs = $this->db->select($query);
        return $getCrs;
    }




}