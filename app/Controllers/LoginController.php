<?php

// app/Controllers/LoginController.php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin()
    {
        // Validate the form data
        $validationRules = [
            'email'    => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/login')->withInput()->with('validation', $this->validator);
        }

        // If validation passes, proceed to login
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Retrieve user data from the database
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login successful
            // You can set session variables or perform other actions here

            return redirect()->to('/dashboard')->with('success', 'Login successful.');
        } else {
            // Login failed
            return redirect()->to('/detail')->with('error', 'Invalid email or password.');
        }
    }
}
