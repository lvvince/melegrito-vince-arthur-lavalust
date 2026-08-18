<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student/home');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00249',
            'name'       => 'Vince Arthur N Melegrito',
            'course'     => 'Bachelor of Science in Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F5',
            'email'      => 'vincemelegrito55@gmail.com',
            'address'    => 'Del Pilar Naujan, Oriental Mindoro',
            'contact'    => '0970-955-6124',
            'skill'      => 'Web Development, PHP, JavaScript',
            'hobbies'    => 'Watching Movie, gaming, Playing Chess'
        ];

        $this->call->view('student/profile', $student);
    }
}