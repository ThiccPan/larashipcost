<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class KotaLocationBuilder implements LocationBuilder
{
    protected $id;

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getKota()
    {
        $response = Http::withHeaders([
            'key' => $this->getKey(),
        ])->get('https://api.rajaongkir.com/starter/city', [
            'id' => $this->id,
        ]);

        return $response->body();
    }

  public function getAllKota()
  {
      $response = Http::withHeaders([
          'key' => $this->getKey(),

      ])->get('https://api.rajaongkir.com/starter/city');

      return $response->body();
  }

  private function getKey()
  {
      return config('larashipcost.api_key');  
  }
}
