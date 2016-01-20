<?php
/**
 * Created by PhpStorm.
 * User: zhudan
 * Date: 16-1-18
 * Time: 上午12:25
 */

    $is_ajax=$_REQUEST['is_ajax'];
    if(isset($is_ajax) && $is_ajax)
    {
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
?>
