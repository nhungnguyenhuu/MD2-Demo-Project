<?php
session_start();

trait Service
{
    public $ADMIN = "admin";
    public $STUDENT = "student";
    public function saveData($key, $data)
    {
        $_SESSION[$key]= $data;
    }
    public function loadData($key)
    {
        return$_SESSION[$key]??[];
    }

}