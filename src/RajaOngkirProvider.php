<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class RajaOngkirProvider extends Provider {

    protected $url = 'https://api.rajaongkir.com/';

    public function getShippingCost()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->post($this->url.'starter/cost', [
            'origin' => $this->idKota,
            'destination' => $this->idDestination,
            'weight' => $this->weight,
            'courier' => $this->courier,
        ]);

        return $response->body();
    }

    public function getAllProvinsi()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->get('https://api.rajaongkir.com/starter/province');

        return $response->body();
    }

    public function getProvinsi()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),

        ])->get('https://api.rajaongkir.com/starter/province/' . $this->idProvinsi);

        return $response->body();
    }

    public function getAllKota()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),
  
        ])->get('https://api.rajaongkir.com/starter/city');
  
        return $response->body();
    }

    public function getKota()
    {
        $response = Http::withHeaders([
            'key' => config('larashipcost.api_key'),
  
        ])->get('https://api.rajaongkir.com/starter/city/' . $this->idKota);
  
        return $response->body();
    }
}
