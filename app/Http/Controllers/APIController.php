<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(){
        $cliente = new \GuzzleHttp\Client();
        $response1 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=1');
        $datos1 = json_decode($response1->getBody()->getContents(), true);
        $uno = [];
        $uno[] = $datos1;

        $response2 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=2');
        $datos2 = json_decode($response2->getBody()->getContents(), true);
        $dos = [];
        $dos[] = $datos2;

        $response3 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=3');
        $datos3 = json_decode($response3->getBody()->getContents(), true);
        $tres = [];
        $tres[] = $datos3;

        $response4 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=4');
        $datos4 = json_decode($response4->getBody()->getContents(), true);
        $cuatro = [];
        $cuatro[] = $datos4;

        $response5 = $cliente->request('GET', 'http://www.boredapi.com/api/activity?participants=5');
        $datos5 = json_decode($response5->getBody()->getContents(), true);
        $cinco = [];
        $cinco[] = $datos5;

        $info = [];

        foreach ($uno as $item) {
            $info[] = [
                'activity' => $item['activity'],
                'type' => $item['type'],
                'participants' => $item['participants'],
                'price' => $item['price'],
                'link' => $item['link'],
                'key' => $item['key'],
                'accessibility' => $item['accessibility']
            ];
        }

        foreach ($dos as $item) {
            $info[] = [
                'activity' => $item['activity'],
                'type' => $item['type'],
                'participants' => $item['participants'],
                'price' => $item['price'],
                'link' => $item['link'],
                'key' => $item['key'],
                'accessibility' => $item['accessibility']
            ];
        }

        foreach ($tres as $item) {
            $info[] = [
                'activity' => $item['activity'],
                'type' => $item['type'],
                'participants' => $item['participants'],
                'price' => $item['price'],
                'link' => $item['link'],
                'key' => $item['key'],
                'accessibility' => $item['accessibility']
            ];
        }

        foreach ($cuatro as $item) {
            $info[] = [
                'activity' => $item['activity'],
                'type' => $item['type'],
                'participants' => $item['participants'],
                'price' => $item['price'],
                'link' => $item['link'],
                'key' => $item['key'],
                'accessibility' => $item['accessibility']
            ];
        }

        foreach ($cinco as $item) {
            $info[] = [
                'activity' => $item['activity'],
                'type' => $item['type'],
                'participants' => $item['participants'],
                'price' => $item['price'],
                'link' => $item['link'],
                'key' => $item['key'],
                'accessibility' => $item['accessibility']
            ];
        }

        return view('blog.api', ['info' => $info]);
    }
}
