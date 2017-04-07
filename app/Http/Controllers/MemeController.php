<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class MemeController extends Controller
{
    public function index()
    {
        $client = new Client();
        $crawler = $client->request('GET','http://www.cuantocabron.com/');
        $nodes = $crawler->filter('.img_cont img');/*->each(function ($node) {
            $imgs[] = $node->attr('src');
        });*/
        return view('memes',['memes'=>$nodes->getIterator()]);
    }

}
