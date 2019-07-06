<?php

class Model {
    protected $_db, $_table, $_modelName, $_softDelete = false,$_columnNames=[],$_validates=true,$_validationErrors=[];
    public $id;
  
    public function __construct($table) {
      $this->_db = DB::getInstance();
      $this->_table = $table;
      $this->_setTableColumns();
      $this->_modelName = str_replace(' ', '', ucwords(str_replace('_',' ', $this->_table)));
    }

    protected function _setTableColumns(){
        $columns=$this->get_columns();
        // dnd($columns);
        foreach($columns as $column){
           $columnName=$column->Field;
          //  dnd($columnName);
            $this->_columnNames[]=$columnName;
            $this->{$columnName}=null;
         
        } 
    }

    
  public function get_columns() {
    return $this->_db->get_columns($this->_table);
  }

  public function find($params = []) {
    $results=[];
    $resultsQuery = $this->_db->find($this->_table);
    foreach ($resultsQuery as $result){
        $obj=new $this->_modelName($this->_table);
        $obj->populateObjData($result);
        $results[]=$obj;


    } return $results;
  }

  public function findFirst($params = []) {
    // $params = $this->_softDeleteParams($params);
    $resultQuery = $this->_db->findFirst($this->_table, $params,get_class($this));
    $result=new $this->_modelName($this->_table);
    if($resultQuery){
      $result->populateObjData($resultQuery);
    }
    
    return $result; 
  }

  
  public function findById($id) {
    return $this->findFirst(['conditions'=>"id = ?", 'bind' => [$id]]);
  }

  public function save() {
    $fields=[];
    foreach($this->_columnNames as $column){
      // var_dump($column);
      $fields[$column]=$this->$column;
      // var_dump($fields[$column]);
    }
    //die();
    // dnd($fields);
    if(property_exists($this,'id')&& $this->id !=''){
      
      return $this->update($this->id,$fields);
    }
    // else{
      return $this->insert($fields);
    //}
    // if($this->_validates){
    //   $this->beforeSave();
    //   $fields = H::getObjectProperties($this);
    //   // determine whether to update or insert
    //   if(property_exists($this, 'id') && $this->id != '') {
    //     $save = $this->update($this->id, $fields);
    //     $this->afterSave();
    //     return $save;
    //   } else {
    //     $save = $this->insert($fields);
    //     $this->afterSave();
    //     return $save;
    //   }
    // }
    // return false;
  }


  public function insert($fields) {
    //dnd($fields);
    if(empty($fields)) return false;
    // if(array_key_exists('id', $fields)) unset($fields['id']);
    return $this->_db->insert($this->_table, $fields);
  }

  public function update($id, $fields) {
    if(empty($fields) || $id == '') return false;
    return $this->_db->update($this->_table, $id , $fields);
  }

  public function delete($id = '') {
    if($id == '' && $this->id == '') return false;
    $id = ($id == '')? $this->id : $id;
    if($this->_softDelete) {
      return $this->update($id, ['deleted' => 1]);
    }
    return $this->_db->delete($this->_table, $id);
  }

  public function query($sql, $bind=[]) {
    return $this->_db->query($sql, $bind);
  }

  public function data() {
    $data = new stdClass();
    foreach($this->_columnNames as $column) {
      $data->column = $value;
    }
    return $data;
  }

  public function assign($params) {
   
    if(!empty($params)) {
      // dnd($this->_columnNames);
      foreach($params as $key => $val) {
        if(in_array($key,$this->_columnNames)){
          $this->$key = sanitize($val);
          // var_dump($key);
          // var_dump($val);
        }
      }
      // dnd($params);
      return true;
    }
    return false;
  }


  protected function populateObjData($result) {
    foreach($result as $key => $val) {
      $this->$key = $val;
    }
  }
 



}