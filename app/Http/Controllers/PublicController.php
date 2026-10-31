<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Home() {
    $images = [
    [
        'id' => 1,
        'image' => 'images/image1.jpeg',
    ],
    [
        'id' => 2,
        'image' => 'images/image2.jpeg',
    ],
    [
        'id' => 3,
        'image' => 'images/image3.jpeg',
    ],
    [
        'id' => 4,
        'image' => 'images/image4.jpeg',
    ],
    [
        'id' => 5,
        'image' => 'images/image5.jpeg',
    ],
];
    return view('Homepage',['images'=>$images]);
}
}
