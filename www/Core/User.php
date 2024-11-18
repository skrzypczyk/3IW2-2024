<?php

namespace App\Core;
class User
{

        public function isLogged():bool
        {
            return false;
        }

        public function logout():void
        {
            session_destroy();
        }

}