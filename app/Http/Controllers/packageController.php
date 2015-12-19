<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class packageController extends Controller
{
    private $winterCamp = array(
        array('date' => 1, 'time' => '9:00', 'icon' => 'picture', 'img' => array('edutainment-1.jpg')),
        array('date' => 1, 'time' => '12:00', 'icon' => 'movie', 'img' => array()),
        array('date' => 1, 'time' => '15:00', 'icon' => 'picture', 'img' => array('edutainment-2.jpg')),
        array('date' => 2, 'time' => '9:00', 'icon' => 'picture', 'img' => array('edutainment-3.jpg')),
        array('date' => 2, 'time' => '13:00', 'icon' => 'movie', 'img' => array()),
        array('date' => 3, 'time' => '9:00', 'icon' => 'picture', 'img' => array('edutainment-4.jpg', 'edutainment-5.jpg')),
        array('date' => 4, 'time' => '9:00', 'icon' => 'location', 'img' => array('edutainment-6.jpg')),
        array('date' => 4, 'time' => '11:00', 'icon' => 'picture', 'img' => array('edutainment-7.jpg')),
    );

    public function showWinterCamp()
    {
        $data = array();
        $data['packageName'] = 'winter-camp';
        $data['package'] = $this->winterCamp;
        return view('pages.edutainment-package', $data);
    }
}
