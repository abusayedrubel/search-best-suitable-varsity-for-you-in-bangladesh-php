<?php
include_once "db/db_class.php";

class ClientSubjects
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


//  Cost Count


//  1. Get all u_id+cost from course_id
//  select sum(subject_tbl.cost),university_tbl.unvname from subject_tbl
//  inner join university_tbl on subject_tbl.u_id=university_tbl.uni_id WHERE c_id=2
// group by u_id


    function getCostbyCourse($cid){
        $query = "select sum(subject_tbl.cost) as total,university_tbl.unvname from subject_tbl 
                  inner join university_tbl on subject_tbl.u_id=university_tbl.uni_id 
                  WHERE c_id='$cid' group by u_id ASC";
        $data = $this->db->select($query);
        return $data;
    }
//    university details

    function getUniversityDetails($id){

        $query = "select * from university_tbl u 
                    where uni_id = '$id' ";
        $data = $this->db->select($query);
        return $data;
    }

//    offered courses

    function getOfferedCourse($id){
        $query = "select DISTINCT c.courseName,c.course_id from university_tbl u
                      inner join subject_tbl s
                      on s.u_id = u.uni_id
                      inner join courses_tbl c
                    on s.c_id = c.course_id
                    where s.u_id = '$id' ";
        $data = $this->db->select($query);
        return $data;
    }
    function getSem($id){
        $query = "select * from university_tbl u 
                    inner join subject_tbl s on s.u_id = u.uni_id 
                    inner join courses_tbl c on s.c_id = c.course_id 
                    where s.u_id = '$id'";
        $data = $this->db->select($query);
        return $data;
    }



}





