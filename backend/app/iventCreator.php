<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Event;


class iventCreator extends Controller
{
  public function callApi()
  {

    $client = new Client();
    $response = $client->request('GET', 'https://back-poster.admlr.lipetsk.ru/api/posters/');
    $data = json_decode($response->getBody())->results;

    foreach($data as $row) {
      $this->store($row);
    }
    return 1;

  }

  public function store($request)
  {
     Event::create([
       'title' => $request->title,
       'date' => preg_replace('/[Z,T]/', ' ', $request->date->lower),
       'price' => $request->price,
       'address' => $request->address
     ]);
     // $entity->title = $request->title;
     // $entity->date = $request->date;
     // $entity->price = $request->price;
     // $entity->address = $request->address;
     // var_dump($entity);
     // $entity->save();
  }
}


    // return json_encode($data);
