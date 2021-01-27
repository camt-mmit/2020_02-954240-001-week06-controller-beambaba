<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class Mul extends Controller
{
    private $title = "mul";

    function form() {
        return view('mul-form', [
            'title' => "{$this->title} : Form"
        ]);
    }

    function result(ServerRequestInterface $request) {
        $data = $request->getParsedBody();
    $n = $data['n'];
    return view('mul-result', 
         ['n' => $n, 
        ]);
    }
}