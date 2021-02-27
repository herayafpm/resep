<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
  protected $table      = 'reseps';
  protected $primaryKey = 'resep_id';

  protected $returnType     = 'array';

  protected $allowedFields = ['resep_nama', 'resep_img', 'resep_bahan', 'resep_cara',];

  protected $useTimestamps = false;
  public function filter($limit, $start, $params = [])
  {
    $builder = $this->db->table($this->table);
    $builder->orderBy($this->primaryKey, 'desc'); // Untuk menambahkan query ORDER BY
    $builder->limit($limit, $start); // Untuk menambahkan query LIMIT
    $builder->select("{$this->table}.*");
    if (isset($params['where'])) {
      $builder->where($params['where']);
    }
    if (isset($params['like'])) {
      foreach ($params['like'] as $key => $value) {
        $builder->like($key, $value);
      }
    }
    $datas = $builder->get()->getResultArray();
    return $datas;
  }
}
