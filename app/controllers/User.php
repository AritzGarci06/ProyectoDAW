<?php

class User extends Controller
{
    public function index()
    {
        $logged = CheckLog::checkLog();
        if ($logged) {
            $movies = $this->model('movie')->getFavoriteMovies($_SESSION['user_id']);
            $data = array();
            $data['movies'] = $movies;
            $data['logged'] = $logged;
            $data['username'] = $_SESSION['username'];
            $this->view('user', $data);
        } else {
            header('Location: ' . ROUTE_URL . '/registration/');
        }
    }

    public function edit()
    {
        $data = array();
        $data['logged'] = CheckLog::checkLog();
        $user = $this->model('user')->getUser($_SESSION['username']);
        $data['user'] = $user;
        $this->view('editUser', $data);
    }

    public function save()
    {
        $userService = $this->model('user');
        $obj = new UserEntity(
            $_POST['user_id'],
            $_POST['username'],
            '',
            $_POST['mail'],
            '',
            ''
        );

        //TODO AL ACTUALIZAR EN LA BD NO REGRESA LA CANTIDAD DE LINEAS CAMBIADAS PERO SI REALIZA EL CAMBIO
        $result = $userService->setUser($obj);
//        if ($result) {
        $answer = array(
            'status' => 'success',
            'message' => 'Cambios Guardados',
            'redirect' => '/proyectodaw/user/'
        );
//        }
//        else {
//            $answer = array(
//                'status' => 'error',
//                'message' => 'Los cambios no han sido guardados',
//            );
//        }

        header('Content-Type: application/json');
        echo json_encode($answer);
    }
}