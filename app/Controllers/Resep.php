<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Resep extends ResourceController
{

  protected $format       = 'json';
  protected $modelName    = 'App\Models\ResepModel';

  public function index()
  {
    try {
      $dataGet = $this->request->getGet();
      $limit = $dataGet["limit"] ?? 10;
      $offset = $dataGet["offset"] ?? 0;
      $reseps = $this->model->filter($limit, $offset);
      return $this->respond(["status" => 1, "message" => "berhasil mengambil data soal", "data" => $reseps], 200);
    } catch (\Exception $th) {
      return $this->respond(["status" => 0, "message" => $th->getMessage(), "data" => []], 500);
    }
  }
}
