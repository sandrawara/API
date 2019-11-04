<?php 
class database {
    public $db;
    public $course_code;    
    public $course_name;
    public $progression;
    public $syllabus;
    

    //Database connection
    function __construct() {
        $this->db = new mysqli(DBHOST, DBUSER, DBPASS, DBDATABASE);
        if($this->db->connect_errno >0){
            die("Connection failed:" . $this->db->connect_error);
        }
}

// Function get data from database - SQL
public function get_list() { 
    $sql = "SELECT id, course_code, course_name, progression, syllabus FROM courses"; //SQL-fråga

    $result = $this->db->query($sql); //Returnerar från databasen


   if($result->num_rows > 0) { // return true
       $output = array();

        while($row = mysqli_fetch_assoc($result)){
            $output[] = $row;
          }

          echo json_encode($output);

        }
            
    }
        // Function to create new data to database - SQL
        public function create_course($id, $course_code, $course_name, $progression, $syllabus ) {
            $sql = "INSERT INTO courses (course_code, course_name, progression, syllabus) VALUES  ('$course_code', '$course_name', '$progression', '$syllabus');";
            
            $this->db->query($sql);

            $this->get_list();
        }

        
        public function update_course($id, $course_code, $course_name, $progression, $syllabus ) {
            $sql = "UPDATE courses SET course_code = '$course_code', course_name = '$course_name', progression = '$progression', syllabus = '$syllabus' WHERE id =$id";
            
            $this->db->query($sql);

            $this->get_list();
        }

       
          public function delete_course($id) {
            $sql = "DELETE FROM courses WHERE id = '$id'";
            
            $this->db->query($sql);

            $this->get_list();
        }
}


?>