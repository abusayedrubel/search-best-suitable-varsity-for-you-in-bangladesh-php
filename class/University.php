<?php
include_once "../db/db_class.php";


class University
{
    private  $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addUniversity($data,$files)
    {
        $unvname = mysqli_real_escape_string($this->db->link,$data['unvname']);
        $details = mysqli_real_escape_string($this->db->link,$data['details']);
        $location = mysqli_real_escape_string($this->db->link,$data['location']);
        $faculty = mysqli_real_escape_string($this->db->link,$data['faculty']);
        $cost = mysqli_real_escape_string($this->db->link,$data['cost']);
		$waiver = mysqli_real_escape_string($this->db->link,$data['waiver']);
        $service = mysqli_real_escape_string($this->db->link,$data['service']);
        $semesterno = mysqli_real_escape_string($this->db->link,$data['semesterno']);





//        image
        $file_name = $files['images']['name'];
        $file_temp = $files['images']['tmp_name'];
        $folder = "img/";
        move_uploaded_file($file_temp, $folder.$file_name);





        $query = "SELECT unvname FROM university_tbl where unvname = '$unvname'";
        $getName = $this->db->select($query);

        if (empty($unvname)) {
            $msg = "University name Can't be empty";
            return $msg;
        }elseif ($getName) {
            $msg = "Already Existed";
            return $msg;
        }elseif($faculty>100 || $faculty<0 || $cost>100 || $cost<0 || $service>100 || $service<0){
            $msg = "Can't be less than 0 or greater than 100";
            return $msg;
        }
        elseif (empty($unvname) || empty($details) || empty($location) ||  empty($semesterno)){
            $msg = "Can't be empty";
            return $msg;
        }else {
            $query =
                "INSERT INTO university_tbl(unvname,details,image,location,faculty,service,cost,waiver,semesterno)
                    VALUES('$unvname','$details','$file_name','$location','$faculty','$service','$cost','$waiver','$semesterno')";
            $unvInsert = $this->db->insert($query);
            if ($unvInsert){
                $msg = "<span class='success' style='color: green;'>University Inserted</span>";
                return $msg;
            }else{
                $msg = "<span class='failed' style='color: red;'>University not  Inserted</span>";
                return $msg;
            }

        }



    }




    public function getUniversity()
    {
        $query = "SELECT * FROM university_tbl";
        $getUni = $this->db->select($query);
        return $getUni;
    }


    


}


