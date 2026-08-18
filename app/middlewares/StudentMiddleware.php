<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (!isset($_SESSION['vincearthurmelegrito_profile_access']) || $_SESSION['vincearthurmelegrito_profile_access'] !== true) {
            $_SESSION['vincearthurmelegrito_denied_msg'] = 'Bawal dumeretso sa profile — bisitahin muna ang Student Home.';
            redirect('student');
        }

        return $next();
    }
}