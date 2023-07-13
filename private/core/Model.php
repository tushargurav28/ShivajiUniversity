<?php

/*
*  Main Model
*/

class Model extends Database {
    
    // protected $table = 'users'; 
 
    function __construct(){
        // code ...
        if(!property_exists($this,'table')){
            $this->table = strtolower($this::class)."s";
        }
    }
        // get specific data
    
    public function where($column, $value) {
        $column = addslashes($column);
        $query = "SELECT * FROM {$this->table} WHERE {$column} = :value";
        // echo $query;
        
        $bindings = [
            'value' => $value
        ];
        
        return $this->query($query, $bindings);
    }


    // insert

    public function insert($data) {
        
        $keys = array_keys($data);
        $columns = implode(',',$keys);
        $values = implode(',:',$keys);
        $query = "insert into {$this->table} ($columns) values (:$values)";
        // echo $query;
        
        return $this->query($query, $data);
    }

        //update....

    public function update($id, $data) {


        $str = "";
        foreach($data as $key => $value){
            $str .= $key. "=:".$key.","; 
        }

        $str = trim($str,",");
        $data['id'] = $id;
        $query = "update $this->table set $str where id = :id;";
        echo $query ;
        return $this->query($query,$data);
    }

    // // delete

    // public function delete($id) {
    //     $column = addslashes($column);
    //     $query = "SELECT * FROM {$this->table} WHERE {$column} = :value";
    //     // echo $query;
        
    //     $bindings = [
    //         'value' => $value
    //     ];
        
    //     return $this->query($query, $bindings);
    // }




    public function findAll() {
        $query = "SELECT * FROM {$this->table}";
        // echo $query;

        return $this->query($query);
    }
    

}





?>