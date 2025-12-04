<?php

class ProductController extends Controller
{
    public function create()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $product = $this->model("Product");
        $result = $product->create($data);

        $this->json($result);
    }

    public function update($id)
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $product = $this->model("Product");
        $result = $product->update($id, $data);

        $this->json($result);
    }

    public function delete($id)
    {
        $product = $this->model("Product");
        $result = $product->delete($id);

        $this->json($result);
    }

    public function view($id)
    {
        $product = $this->model("Product");
        $result = $product->view($id);

        $this->json($result);
    }

    public function list()
    {
        $product = $this->model("Product");
        $result = $product->listAll();

        $this->json($result);
    }
}
