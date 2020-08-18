<?php

    class Router
    {
        private $routes;

        public function __construct()
        {
            $routes= ROOT.'/config/routes.php';
            $this->routes = include ($routesPath)
        }

        public function run()
        {
            echo 'class router';
        }
    }