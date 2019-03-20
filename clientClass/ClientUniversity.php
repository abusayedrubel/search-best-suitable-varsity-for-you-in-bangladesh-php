<?php
include_once "db/db_class.php";



class ClientUniversity
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }



    public function getService()
    {
        $query = "SELECT uni_id,unvname,faculty,service FROM university_tbl  order by service DESC";
        $getFc = $this->db->select($query);
        return $getFc;
    }
    public function getWaiver()
    {
        $query = "SELECT uni_id,unvname,waiver FROM university_tbl  order by waiver DESC";
        $getFc = $this->db->select($query);
        return $getFc;
    }

    public function getFaculty()
    {
        $query = "SELECT uni_id,unvname,faculty FROM university_tbl  order by faculty DESC";
        $getFc = $this->db->select($query);
        return $getFc;
    }

    public function getUniversity()
    {
        $query = "SELECT * FROM university_tbl";
        $getFc = $this->db->select($query);
        return $getFc;
    }


// here is the condition

    public function getBestChoice($cost,$service,$faculty)
    {
        if($cost == 'high' && $service == 'high' && $faculty == 'high' ){
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` > 90 and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'high' && $service == 'medium' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` between 80 and 90 and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'high' && $service == 'low' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` < 80  and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'high' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` > 90 and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'medium' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` between 80 and 90 and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'low' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` < 80 and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'high' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` > 90  and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'medium' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` between 80 and 90  and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'low' && $faculty == 'high') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` < 80  and `faculty` > 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }
        // 
        elseif($cost == 'high' && $service == 'high' && $faculty == 'medium' ){
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` > 90 and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'high' && $service == 'medium' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` between 80 and 90 and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'high' && $service == 'low' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` < 80  and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'high' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` > 90 and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'medium' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` between 80 and 90 and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'low' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` < 80 and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'high' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` > 90  and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'medium' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` between 80 and 90  and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'low' && $faculty == 'medium') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` < 80  and `faculty` between 80 and 90 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }
        // 
        elseif($cost == 'high' && $service == 'high' && $faculty == 'low' ){
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` > 90 and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'high' && $service == 'medium' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` between 80 and 90 and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'high' && $service == 'low' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` > 90 and `service` < 80  and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'high' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` > 90 and `faculty` between < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'medium' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` between 80 and 90 and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'medium' && $service == 'low' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` between 80 and 90 and `service` < 80 and `faculty` < 80LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'high' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` > 90  and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'medium' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` between 80 and 90  and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }elseif ($cost == 'low' && $service == 'low' && $faculty == 'low') {
            $query = "SELECT `unvname` FROM `university_tbl` WHERE `cost` < 80 and `service` < 80  and `faculty` < 80 LIMIT 1";
            $get_bc = $this->db->select($query);
            return $get_bc;
        }

        else{
            $get_bc = "No Result";
            return $get_bc;
        }
    }




}