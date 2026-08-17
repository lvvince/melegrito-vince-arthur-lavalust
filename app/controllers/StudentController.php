<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $student = [
            'student_id' => 'MCC2024-00249',
            'name'       => 'Vince Arthur N Melegrito',
            'course'     => 'Bachelor of Science in Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F5',
            'email'      => 'vincemelegrito55@gmail.com'
        ];

        $this->call->view('student/home', $student);
    }

    public function profile()
    {
        return $this->middleware->run(
            ['student_access'],
            function () {
                $student = [
                    'student_id' => 'MCC2024-00249',
                    'name'       => 'Vince Arthur N Melegrito',
                    'course'     => 'Bachelor of Science in Information Technology',
                    'year'       => '3rd Year',
                    'section'    => '3-F5',
                    'email'      => 'vincemelegrito55@gmail.com',
                    'address'    => 'Del Pilar Naujan, Oriental Mindoro',
                    'hobbies'    => 'Coding, gaming, IoT tinkering'
                ];

                $this->call->view('student/profile', $student);
            }
        );
    }
}