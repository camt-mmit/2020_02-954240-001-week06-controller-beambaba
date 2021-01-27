<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class Area extends Controller
{
    private $title = "area";

    function form() {
        return view('area-form', [
            'title' => "{$this->title} : Form"
        ]);
    }

    function result(ServerRequestInterface $request) {
        $data = $request->getParsedBody();
        $type = (double)$data['a'];
        $width = (double)$data['width'];
        $height = (double)$data['height'];
        if ('1' === strtolower($type)) {
        $area = $width * $height;
        } else if ('2' === strtolower($type))
        $area = 0.5 * $width * $height;
        return view('area-result', [
        'type' => $type, 'width' => $width, 'height' => $height,
        'area' => $area
        ]);
    }
}