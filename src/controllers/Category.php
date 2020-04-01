<?php
namespace Controllers;

use Siler\Swoole;
use Siler\Route;

class Category extends Base{
    
    
    
    public function index(array $routeParams){

        Swoole\emit('Index');
    }


}
