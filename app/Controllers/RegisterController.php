<?php

// app/Controllers/RegisterController.php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function processRegister()
    {
        // Validate the form data
        $validationRules = [
            'username' => 'required|min_length[3]|max_length[20]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('/register')->withInput()->with('validation', $this->validator);
        }

        // If validation passes, proceed to register the user
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Save user data to the database
        $userModel = new UserModel();
        $userData = [
            'username' => $username,
            'email'    => $email,
            'password' => $password,
        ];

        $userModel->save($userData);

        return redirect()->to('/login')->with('success', 'Registration successful. Please log in.');
    }
}
