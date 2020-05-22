<?php
    
    class LoginController extends AppController{	
        public function index()
        {
            View::template(NULL);
            if( Input::hasPost('password', 'nickname') ){
                $nick = Input::post('nickname');
                $pass = Input::post('password');

                $auth = new Auth('model', 'class: usuarios', "nickname: $nick", "password: $pass");

                if( $auth->authenticate() ){
                    Redirect::to('/');
                    return true;
                }
                
                Redirect::to('Login');
                return false;
            }
        }

        public function signup()
        {
            # code...
        }

        public function logout()
        {
            View::template(NULL);

            View::select(NULL, NULL);
            Auth::destroy_identity();
            Redirect::to('Login');
        }
    }