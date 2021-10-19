<?php

namespace App\Login\Controller;

use App\Login\Model\Login;
use Core\GlobalFunc;
use PDOException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends GlobalFunc
{
    public $conn;
    public $model;
    public $username;

    public function __construct()
    {
        $this->model = new Login();
        parent::beginSession();
        $globalFunc = new GlobalFunc();
        $this->conn = $globalFunc->conn;
    }

    public function index(Request $request)
    {
        if ($this->username != null) {
            return new RedirectResponse("/dashboard");
        }

        $errors = $this->session->getFlashBag()->get('errors', []);  //parameter kedua untuk default value
        return $this->render_template('/welcome', ['errors' => $errors]); // parameter pertama key, paramater kedua value
    }

    public function login(Request $request)
    {

        $username = $request->request->get('username');
        $password = $request->request->get('password');
        // dd($username);

        try {
            $sql = "SELECT * FROM users  WHERE username = '$username' ";
            // dd($sql);

            $query = $this->conn->prepare($sql);
            $query->execute();
            $data = $query->fetch();

            if ($data != false) {

                if (password_verify($password, $data['password'])) {


                    $this->session->set('namaUser', $data['namaUser']);
                    $this->session->set('username', $data['username']);

                    $_SESSION['idUser'] = $data['idUser'];

                    return header("Location: /dashboard");
                } else {

                    $this->session->getFlashBag()->add('errors', 'Password salah!');

                    return header("Location: /admin");
                }
            } else {

                $this->session->getFlashBag()->add('errors', 'Akun tidak ditemukan!');

                return header("Location: /admin");
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function logout(Request $request)
    {
        $this->session->invalidate();
        return header("Location: /admin");
    }
}
