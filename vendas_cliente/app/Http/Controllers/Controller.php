<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $service;

    public function list()
    {
        return $this->service->list();
    }

    public function delete(int $id)
    {
        return $this->service->delete($id);
    }
}
