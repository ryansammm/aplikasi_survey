<?php

namespace Core;

use Config\Database;
use Symfony\Component\HttpFoundation\Response;

class GLobalFunc
{
    public $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function render_template($page, $data = [], $request = null)
    {
        if (!is_null($request)) {
            extract($request->attributes->all(), EXTR_SKIP);
        }
        extract($data, EXTR_SKIP);

        ob_start();
        include sprintf(__DIR__.'/../../src/pages/%s.php', $page);

        return new Response(ob_get_clean());
    }
}
