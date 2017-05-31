<?php
namespace App\Repositories\Contract;

interface BaseInterface{
  public function all($column=array('*'));

  public function find($id, $column=array('*'));

  public function update($id,$data);

  public function create($data);

  public function delete($id);

  public function deleteAll($data);

  public function getOrder();

  public function findByField($field, $value, $column=['*']);

}
