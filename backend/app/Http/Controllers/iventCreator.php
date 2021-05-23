<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Event;


class iventCreator extends Controller
{
  public function callApi()
  {
    DB::table('events')->truncate();

    $client = new Client();
    $response = $client->request('GET', 'https://back-poster.admlr.lipetsk.ru/api/posters/?per_page=88');
    $data = json_decode($response->getBody())->results;
    foreach($data as $row) {
      $this->store($row);
    }
    return "1";


  }

  public function store($request)
  {
    $datefar =   $request->date!=null ? date('Y-m-d h:i:s', strtotime($request->date->upper)) : $datefar=null;
    $dateStart =   $request->date!=null ? date('Y-m-d h:i:s', strtotime($request->date->lower)) : $dateStart=null;
    Event::create([
       'title' => $request->title,
       //'date' => preg_replace('/[Z,T]/', ' ', $request->date->lower),
       //'endDate'=> preg_replace('/[Z,T]/', ' ', $request->date->upper),
       'date' =>  $dateStart,
       'endDate'=>  $datefar,
       'description' => $request->categories->title,
       'price' => $request->price,
       'address' => $request->address,
       'image' => $request->image

     ]);

  }
  public function indexAll(){
    $all =  Event::select('title', 'id')->get();
    return json_encode($all, JSON_UNESCAPED_UNICODE);
  }
  //возвращает все ивенты с соответствующей категорией
  public function index(){
    $all = Event::where('description');
    return json_encode($all, JSON_UNESCAPED_UNICODE);
  }

  //public function IndexOneEvent($value)
  //{
  //  $all = return Event::findOrFail($value);
  //  return json_encode($all, JSON_UNESCAPED_UNICODE);
  //}

}


    // return json_encode($data);
