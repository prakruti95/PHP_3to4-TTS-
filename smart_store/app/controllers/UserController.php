<?php

class UserController extends Controller
{
    public function register()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $user = $this->model("User");
        $result = $user->register($data);

        $this->json($result);
    }

    public function login()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $user = $this->model("User");
        $result = $user->login($data);

        $this->json($result);
    }
}
