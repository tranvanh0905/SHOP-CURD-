<?php

trait AuthTrait
{
    function checkAuth()
    {
        if(!isset($_SESSION['auth'])||$_SESSION['auth']==null)
        {
            header("location:./dang-nhap-tai-khoan");
            die;
        }
        return $this;
    }
}

?>