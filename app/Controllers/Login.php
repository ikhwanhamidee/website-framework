<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\User;
 
class Login extends BaseController
{
    public function index()
    {
        return view('admin/login');
    } 
    public function authenticate()
{
    $session = session();
    $userModel = new User();

    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $user = $userModel->where('email', $email)->first();

    if (is_null($user)) {
        return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
    }

    $pwd_verify = password_verify($password, $user['password']);

    if (!$pwd_verify) {
        return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
    }

    $ses_data = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'phone_no' => $user['phone_no'],
        'address' => $user['address'],
        'city' => $user['city'],
        'state' => $user['state'],
        'postcode' => $user['postcode'],
        'level' => $user['level'], // Add the 'level' field from the database to the session data
        'isLoggedIn' => TRUE
    ];

    $session->set($ses_data);

    // Determine the dashboard URL based on the user's level and redirect accordingly
    if ($user['level'] == "0") {
        return redirect()->to('admin/dashboard'); // Redirect to the admin dashboard
    } elseif ($user['level'] == "1") {
        return redirect()->to('user/dashboard'); // Redirect to the user dashboard
    } 
}

    
 
    public function logout() {
        session_destroy();
        return redirect()->to('/admin');
    }
    
}