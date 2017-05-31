<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contract\BaseInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class BaseRepository implements BaseInterface{

  protected $model;

  public function __construct()
  {
    $this->model = $this->setModel();
  }

  abstract public function getModel();

  public function setModel()
  {
    return app()->make($this->getModel() );
  }
  /*GET ALL*/
  public function all($column=['*'])
  {
    return $this->model->all($column);
  }

  /*FIND ID*/
  public function find($id, $column=['*'])
  {
    return $this->model->find($id, $columns);
  }

  /*FIND WHERE*/
  public function findByField($field, $value, $column=['*'])
  {
    return $this->model->where($field,'=',$value)->get($column);
  }

  /*UPDATE*/
  public function update($id, $data)
  {
    try {
      $rs = $this->model->find($id);
      return $rs->update($data);
    } catch (ModelNotFoundException $e) {
      return false;
    }
  }

  /*CREATE*/
  public function create($data)
  {
    return $this->model->create($data);
  }

  /*DELETE*/
  public function delete($id)
  {
    $this->model->destroy($id);
  }

  /*DELETE ALL*/
  public function deleteAll($data)
  {
    $this->model->destroy($data);
  }

  /*GET ORDER*/
  public function getOrder()
  {
    try {
      $inst = $this->model->orderBy('id','DESC')->firstOrFail();
      return $inst->order;
    } catch (ModelNotFoundException $e) {
      return 1;
    }
  }
}
