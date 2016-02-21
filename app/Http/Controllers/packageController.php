<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class packageController extends Controller
{
    private $summerCamp = array(
        array('date' => 1, 'icon' => 'picture', 'img' => array('edutainment-1.jpg')),
        array('date' => 2, 'icon' => 'movie', 'img' => array('edutainment-2.jpg')),
        array('date' => 3, 'icon' => 'picture', 'img' => array('edutainment-3.jpg')),
        array('date' => 4, 'icon' => 'picture', 'img' => array()),
        array('date' => 5, 'icon' => 'movie', 'img' => array()),
        array('date' => 6, 'icon' => 'picture', 'img' => array('edutainment-6.jpg')),
        array('date' => 7, 'icon' => 'location', 'img' => array('edutainment-7.jpg')),
        array('date' => 8, 'icon' => 'picture', 'img' => array('edutainment-8.jpg')),
        array('date' => 9, 'icon' => 'picture', 'img' => array('edutainment-9.jpg')),
    );

    public function showSummerCamp()
    {
        $data = array();
        $data['packageName'] = 'summer-camp';
        $data['package'] = $this->summerCamp;
        return view('pages.edutainment-package', $data);
    }
}
