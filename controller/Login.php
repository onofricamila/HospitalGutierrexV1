<?php
    require_once './model/User.php';
    class LoginController {
        private static $instance;
        
        public static function getInstance() {
            if (!isset(self::$instance)) {
                self::$instance = new self();
            }
    
            return self::$instance;
        }

        private function __construct() {

        }
        
        public function index(){
            if (AppController::getUser() instanceof User) {
                echo "Ya estas logueado!";
                die;
            }
            else {
                /*
                require_once 'view/header.html';
                require_once 'view/navbar.php';
                require_once 'view/login/login.html';
                require_once 'view/footer.html';
                die;
                */

                $context = [];
                
                $context['stylesheets'] = ['/public/css/main.css'];
                $context['javascripts'] = ['/public/js/login.js'];
                $context['pagename'] = 'Login';
    
                $path = '/login/view.html.twig';
                
                TwigController::renderTwig($path, $context);
                die;
            }
        }

        public function login(){
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $user = User::login($user, $pass);
            if ($user->isGuest()) {
                header("Location: index.php?controller=Login&action=index&error=1");
                die();
            }

            $_SESSION['loggedid'] = $user->id;

            header("Location: index.php");
            die();
        }

        public function logout() {
            session_destroy();
            header("Location: index.php");
            die();
        }

    }
    