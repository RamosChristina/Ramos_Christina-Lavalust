<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Visiting Home is what "unlocks" the profile page
        $_SESSION['cr_profile_access'] = true;

        // Pick up a one-time notice from the middleware, if any
        $data['message'] = $_SESSION['cr_access_message'] ?? null;
        unset($_SESSION['cr_access_message']);

        $data['page_title'] = "Student Information Page";

        $this->call->view('student', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => '2024-00270',
            'name'       => 'Christina Ramos',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F6',
            'email'      => 'christinagrezola@gmail.com',
            'address'    => 'Masipit, Calapan City',
            'contact'    => '09123456789',
            'hobbies'    => 'Reading and Writing',
            'about'      => "Hi, I'm Christina, a 3rd year BS Information Technology student who enjoys quiet afternoons with a good book and finding new ways to put thoughts into words.",
        ];

        $this->call->view('student_profile', $student);
    }
}