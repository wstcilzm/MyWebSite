<?php
function db_connect(){
    $result=new mysqli('localhost','bm_user','password','bookmarks');
    if(!$reuslt){
        throw new Exception('Could not connect to database server');
    }
    else
    {
        return $result;
    }
}
