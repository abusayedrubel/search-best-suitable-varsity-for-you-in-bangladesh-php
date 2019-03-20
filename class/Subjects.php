<?php
include_once "../db/db_class.php";

class Subjects
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addSubjects($data)
    {
        $subName = mysqli_real_escape_string($this->db->link, $data['subjectN']);
        $subjectC = mysqli_real_escape_string($this->db->link, $data['subjectC']);
        $uni_id = mysqli_real_escape_string($this->db->link, $data['univN']);
        $c_id = mysqli_real_escape_string($this->db->link, $data['courseN']);
        $credit = mysqli_real_escape_string($this->db->link, $data['credit']);
        $cost = mysqli_real_escape_string($this->db->link, $data['cost']);
        $semester = mysqli_real_escape_string($this->db->link, $data['semester']);




        if (empty($subName) || empty($subjectC)) {
            $msg = "Can't be empty";
            return $msg;
        } else {
            $query =
                "INSERT INTO subject_tbl(c_id,u_id,sub_name,sub_code,credit,cost,semester)
                    VALUES('$c_id','$uni_id','$subName','$subjectC','$credit','$cost','$semester')";
            $unvInsert = $this->db->insert($query);
            if ($unvInsert) {
                $msg = "<span class='success' style='color: green;'>Course Inserted</span>";
                return $msg;
            } else {
                $msg = "<span class='failed' style='color: red;'>Course not  Inserted</span>";
                return $msg;
            }

        }
    }


    function getSub(){
        $query = "select * from university_tbl u 
                    inner join subject_tbl s on s.u_id = u.uni_id 
                    inner join courses_tbl c on s.c_id = c.course_id 
                    order by u.unvname ASC";
        $data = $this->db->select($query);
        return $data;
    }

    public function delSub($id)
    {
        $query = "DELETE FROM subject_tbl WHERE s_id='$id' ";
        $delsub = $this->db->delete($query);
        return $delsub;
    }
}