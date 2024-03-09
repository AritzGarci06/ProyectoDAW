<?php
include_once "model/config/MySQLBD.php";
include_once "model/entity/Movie.php";
include_once "model/dao/DaoMovie.php";
include_once "model/services/MovieService.php";

$BadRequestCode = 400;
$NotFoundCode = 404;
$MethodNotAllowedCode = 405;

$metodo = $_SERVER["REQUEST_METHOD"];
switch ($metodo) {
    case "POST":
        $body = file_get_contents("php://input");
        if (!$body) {
            echo "Request empty";
            http_response_code($BadRequestCode);
        } else {
            $movie = \entity\Movie::jsonToObj($body);
//            if($movie-> == "" || $movie->mensaje == "" || $movie->fecha == ""){
//                echo "Datos incompletos";
//                http_response_code($BadRequestCode);
//            }else{
//                UsuarioService::setMensajes($movie);
//            }
            \services\MovieService::setMovie($movie);
        }
        break;
    case "GET":
        if (isset($_GET["id"]) && $_GET["id"] != "") {
            $id = $_GET["id"];
            $mensaje = \services\MovieService::getMovie($id);
            if (!$mensaje) {
                echo "Movie no encontrado";
                http_response_code($NotFoundCode);
            } else {
                header("Content-Type: application/json");
                echo json_encode($mensaje);
            }
        } else {
            $result = \services\MovieService::getMovies();
            header("Content-Type: application/json");
            echo json_encode($result);
        }
        break;
    case "PUT":
        $body = file_get_contents("php://input");
        if(!$body){
            echo "Request empty";
            http_response_code($BadRequestCode);
        }else{
            $movie = \entity\Movie::jsonToObj($body);
            \services\MovieService::updateMovie($movie);
        }
        break;
    case "DELETE":
//        if (isset($_GET["id"]) && $_GET["id"] != "") {
//            $id = $_GET["id"];
//            UsuarioService::deleteMensajeById($id);
//        }else{
//            echo "El id es obligatorio";
//            http_response_code($BadRequestCode);
//        }
        break;
    default:
        http_response_code($MethodNotAllowedCode);
        break;

}