<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // asphalt page

    public function asphalt(){
        return view('pages.asphalt');
    }

    // metal page
    public function metal(){
        return view('pages.metal');
    }

     // gutter page
     public function gutter(){
        return view('pages.gutter');
    }

     // solor page
     public function solor(){
        return view('pages.solor');
    }

    // solorReview page
    public function solorReview(){
        return view('pages.solorReview');
    }
    // shingles page
    public function shingles(){
        return view('pages.shingles');
    }
    // shinglesPrice page
    public function shinglesPrice(){
        return view('pages.shinglePrice');
    }
    // shinglesRating page
    public function shinglesRating(){
        return view('pages.shingleRating');
    }
    // Reviews page
    public function shinglesReviews(){
        return view('pages.shingleReviews');
    }


    // tile page
    public function tile(){
        return view('pages.shingleTitle');
    }
            // rubber page
    public function rubber(){
        return view('pages.shingleRubber');
    }
    // aluminum page
    public function aluminum(){
        return view('pages.shingleAluminium');
    }
            // architectural page
    public function architectural(){
        return view('pages.shingleArchitec');
    }
    // Reviews sola
    public function sola(){
        return view('pages.shingleSolor');
    }

    

    

}
