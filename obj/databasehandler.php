<?php

class DataBaseHandler {

    public $link;
    protected $sql;
    protected $sql_res;
    public $sql_arr;


    public function __construct($host, $database, $user, $password){

        $this -> link = mysqli_connect($host, $user, $password, $database);

    }

    public function getQuery($sql){

        $this->sql=$sql;
        $this->sql_res = mysqli_query($this->link, $this->sql);
        $this->sql_arr = mysqli_fetch_all($this->sql_res);
    }

}

