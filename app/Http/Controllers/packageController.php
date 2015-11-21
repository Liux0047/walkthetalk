<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class packageController extends Controller
{
    private $edutainment = array(
        array(
            array('date' => 1, 'time' => '9:00', 'icon' => 'picture', 'img' => array('edutainment-1.jpg')),
            array('date' => 1, 'time' => '12:00', 'icon' => 'book', 'img' => array()),
            array('date' => 1, 'time' => '15:00', 'icon' => 'picture', 'img' => array('edutainment-2.jpg')),
            array('date' => 2, 'time' => '9:00', 'icon' => 'picture', 'img' => array('edutainment-3.jpg')),
            array('date' => 2, 'time' => '13:00', 'icon' => 'book', 'img' => array()),
            array('date' => 3, 'time' => '9:00', 'icon' => 'picture', 'img' => array('edutainment-4.jpg', 'edutainment-5.jpg')),
            array('date' => 4, 'time' => '9:00', 'icon' => 'location', 'img' => array('edutainment-6.jpg')),
            array('date' => 4, 'time' => '11:00', 'icon' => 'picture', 'img' => array('edutainment-7.jpg')),
            array('date' => 4, 'time' => '16:00', 'icon' => 'location', 'img' => array('edutainment-8.jpg')),
            array('date' => 5, 'time' => '9:00', 'icon' => 'picture', 'img' => array()),
            array('date' => 5, 'time' => '12:00', 'icon' => 'picture', 'img' => array()),
        ),
    );

    public function showPackage($id)
    {
        return view('pages.edutainment-package', ['package' => $this->edutainment]);
    }
}
