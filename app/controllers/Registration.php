<?php

class Registration extends Controller
{
    public function index()
    {
        $this->view('signin');
    }

    public function register()
    {
        $this->view('register');
    }

    public function login()
    {
        $data = array();
        $username = "";
        $data['username'] = $username;
        $this->view('login', $data);
    }

    public function logout()
    {
        CheckLog::logout();
    }

    public function checkUser()
    {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $userService = $this->model('user');
        $user = $userService->getUser($username);
        if ($user == null) {
            $answer = array(
                'status' => 'error',
                'message' => 'Usuario no encontrado',
            );
            $json_response = json_encode($answer);
            header('Content-Type: application/json');
            echo $json_response;
        } elseif ($user->user_password != $password) {

            $answer = array(
                'status' => 'error',
                'message' => 'Contraseña incorrecta',
            );
            $json_response = json_encode($answer);
            header('Content-Type: application/json');
            echo $json_response;
        } else {
            CheckLog::login($user);
            $answer = array(
                'status' => 'success',
                'message' => 'Logeado correcto',
                'redirect' => $_SESSION['redirect']
            );
            $json_response = json_encode($answer);
            header('Content-Type: application/json');
            echo $json_response;
        }
    }

    public function registerUser()
    {
        $userService = $this->model('user');

        $username = trim($_POST["username"]);
        if ($userService->getUser($username) != null) {
            $answer = array(
                'status' => 'error',
                'message' => 'Usuario ya existe'
            );
            $json_response = json_encode($answer);
            header('Content-Type: application/json');
            echo $json_response;
        } else {
            $obj = UserEntity::arrayToObj($_POST);
            $obj->registration_date = Utils::getDate();
            if ($userService->setUser($obj)) {
                CheckLog::login($obj);
                $answer = array(
                    'status' => 'success',
                    'message' => 'Usuario registrado',
                    'redirect' => '/proyectodaw/'
                );
                $json_response = json_encode($answer);
                header('Content-Type: application/json');
                echo $json_response;
            }
        }
    }

    public function savePreviousURL()
    {
        CheckLog::saveURLOrigin();
    }
}
