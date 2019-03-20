<?php
include_once "../db/db_class.php";



class Courses
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addCourse($data)
    {
        $courseName = mysqli_real_escape_string($this->db->link, $data['courseName']);
        $c_code = mysqli_real_escape_string($this->db->link, $data['c_code']);


        $query1 = "SELECT c_code FROM courses_tbl where c_code = '$c_code'";
        $query2 = "SELECT courseName FROM courses_tbl where courseName = '$courseName'";
        $getName = $this->db->select($query1);
        $getCode= $this->db->select($query2);

        if ($getName || $getCode) {
            $msg = "Already Existed";
            return $msg;
        }elseif (empty($courseName) || empty($c_code)){
            $msg = "Can't be empty";
            return $msg;
        }else {
            $query =
                "INSERT INTO courses_tbl(courseName,c_code)
                    VALUES('$courseName','$c_code')";
            $unvInsert = $this->db->insert($query);
            if ($unvInsert){
                $msg = "<span class='success' style='color: green;'>Course Inserted</span>";
                return $msg;
            }else{
                $msg = "<span class='failed' style='color: red;'>Course not  Inserted</span>";
                return $msg;
            }

        }

    }


    public function getCourse()
    {
        $query = "SELECT * FROM courses_tbl";
        $getCrs = $this->db->select($query);
        return $getCrs;
    }




}