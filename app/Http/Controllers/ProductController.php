<?php

namespace App\Http\Controllers;

use ftp;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function heren() {
        return 'Je zit op de heren pagina';
    }

    public function dames() {
        return 'Je zit op de dames pagina';
    }

    public function kids() {
        return 'Je zit op de kids pagina';
    }

    public function contact() {
        return 'Je zit op de contact pagina';
    }

    public function details($id) {
        return 'Je zit op de detailspagina van product ' . $id;
    }
}
