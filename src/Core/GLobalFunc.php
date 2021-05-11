<?php

namespace Core;

use Symfony\Component\HttpFoundation\Response;

class GLobalFunc
{
    function render_template($request, $data = [])
    {
        extract($request->attributes->all(), EXTR_SKIP);
        extract($data, EXTR_SKIP);

        ob_start();
        include sprintf(__DIR__.'/../../src/pages/%s.php', $_route);

        return new Response(ob_get_clean());
    }
}
