<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class Mul2 extends Controller
{
    private $title = "mul2";

    function form() {
        return view('mul2-form', [
            'title' => "{$this->title} : Form"
        ]);
    }

    function result(ServerRequestInterface $request) {
        $data = $request->getParsedBody();
        $n = $data['n'];
if(!empty($data['op']))
    $op = $data['op'];
else
    $op = [];

    
    return view('mul2-result', [
        'n' => $n,
        'op' => $op,
        ]);
    }
}