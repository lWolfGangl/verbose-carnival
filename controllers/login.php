<?php
class Login extends Controller{
    function __construct(){
        parent::__construct();
        error_log('login::construct -> inicio de login');
    }
    function render(){
        error_log('login::construct -> Carga el index de login');
        $this->view->render('login/index');
    }
}
?>