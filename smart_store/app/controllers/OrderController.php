<?php

class OrderController extends Controller
{
    public function create()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $order = $this->model("Order");
        $result = $order->create($data);

        $this->json($result);
    }

    public function view($id)
    {
        $order = $this->model("Order");
        $result = $order->view($id);

        $this->json($result);
    }

    public function list()
    {
        $order = $this->model("Order");
        $result = $order->listAll();

        $this->json($result);
    }
}
