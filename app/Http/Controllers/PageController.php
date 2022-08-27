<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Project;

class PageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages/home', compact('user'));
    }

    public function results(Request $request)
    {
        
        // Get search term
        $search = $request->search;
        
        return redirect('search/'.$search);


    }

    public function search(Request $request, $keyword)
    {

        $client = new Client();

        // Use API key to get Data 

        $res = $client->request('GET', "https://api.unsplash.com/search/photos?",
        ["query"=>[
            "query"=>$keyword,
            "client_id"=>
            env('UNSPLASH_KEY')
        ]],
        "&per_page=30");

        $data = $res->getBody();
        $data = json_decode($data);
        $filteredData = $data->results;

        $imageArray = Project::where('user_id', Auth::id())->where('active', 1)->first();
        $imageArray = $imageArray->image;
        $newArray = [];

        foreach($imageArray as $image){
            array_push($newArray, $image->image_info);
        }

        $user = Auth::user();
        return view('pages/results', compact('user', 'filteredData', 'keyword', 'newArray'));

    }
}
