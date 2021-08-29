<?php

namespace Core;

use Config\Database;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class GlobalFunc
{
    public $conn;
    public $baseUrl;
    public $session;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
        $this->baseUrl = 'http://crt-framework.com/';
    }

    public function beginSession()
    {
        $this->session = new Session();
        $this->session->start();
    }

    public function render_template($page, $data = [], $request = null)
    {
        if (!is_null($request)) {
            extract($request->attributes->all(), EXTR_SKIP);
        }
        extract($data, EXTR_SKIP);

        // ** fungsi panggil asset **
        $assets = function ($pathFile) {
            return $this->baseUrl.'assets/'.$pathFile;
        };

        ob_start();
        include sprintf(__DIR__.'/../../src/pages/%s.php', $page);

        return new Response(ob_get_clean());
    }

    public function dd(...$vars)
    {
        foreach ($vars as $key => $value) {
            var_dump($value);
        }
        die();
    }
}
