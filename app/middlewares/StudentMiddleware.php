<?php
class StudentMiddleware
{
    public function handle(Closure $next)
    {
        // Unique access condition: session flag set after visiting /student
        if (!isset($_SESSION['vincearthurmelegrito_profile_access']) || $_SESSION['vincearthurmelegrito_profile_access'] !== true) {
            $_SESSION['vincearthurmelegrito_denied_msg'] = 'Bawal dumeretso sa profile bisitahin muna ang Student Home.';
            redirect('student');
        }

        return $next();
    }
}
