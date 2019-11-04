<?php
// required headers
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT');
 
include('config.php');

$method = $_SERVER['REQUEST_METHOD'];
$input=json_decode(file_get_contents("php://input"),true);


$obj = new database;


// Method to get database object to function
switch ($method){
    case "GET":
       $obj->get_list();
        break;

    // Post method
    case "POST":
        $obj->create_course($input['id'], $input['course_code'], $input['course_name'], $input['progression'], $input['syllabus']);    
        break;

    case "PUT":
        $obj->update_course($input['id'], $input['course_code'], $input['course_name'], $input['progression'], $input['syllabus']);
        break;

    case "DELETE":
        $obj->delete_course($input['id']);

}

?>