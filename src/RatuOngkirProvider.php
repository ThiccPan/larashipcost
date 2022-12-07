<?php

namespace ThiccPan\Larashipcost;

use Illuminate\Support\Facades\Http;

class RatuOngkirProvider extends Provider { 
    protected $url = 'https://636dcc52b567eed48ac95a16.mockapi.io/ratuongkir';

    public function __construct($prov, $origin, $dest, $weight, $courier) {
        $this->idProvinsi = $prov;
        $this->idKota = $origin;
        $this->idDestination = $dest;
        $this->weight = $weight;
        $this->courier = $courier;
    }

    public function getShippingCost()
    {
        // set kota asal dan destinasi pengiriman
        $asal = $this->getKota();
        $asal = json_decode($asal, true);

        $destinasi = $this->getDestinasi();
        $destinasi = json_decode($destinasi, true);

        // deklarasi jarak dan tarif/km untuk dimasukkan ke harga ongkir
        $jarak = $this->countDistance(
            $asal['latitude'],
            $asal['longitude'],
            $destinasi['latitude'],
            $destinasi['longitude']
        );

        // menyesuaikan tarif dengan berat barang
        $tarif = $this->cekBerat($this->weight, 12000);

        // total ongkir = jarak pengiriman dikali tarif/km
        $hargaOngkir = 0;
        $hargaOngkir += ($jarak * $tarif);
        return $hargaOngkir;
    }

    public function getAllProvinsi()
    {
        $response = Http::get($this->url . "/provinsi");
        return $response->body();
    }

    public function getProvinsi()
    {
        $response = Http::get($this->url . "/provinsi/" . $this->idProvinsi);
        return $response->body();
    }

    public function getAllKota()
    {
        $response = Http::get($this->url
            . "/kota");

        return $response->body();
    }

    public function getKota()
    {
        $response = Http::get($this->url
            . "/kota/"
            . $this->idKota);

        return $response->body();
    }

    public function getDestinasi()
    {
        $respones = Http::get($this->url
            . "/kota/"
            . $this->idDestination);

        return $respones->body();
    }

    private function countDistance($latitudeAsal, $latitudeDestinasi, $longitudeAsal, $longitudeDestinasi, $earthRadius = 6371000)
    {
        // convert derajat ke radian
        $latFrom = deg2rad($latitudeAsal);
        $lonFrom = deg2rad($latitudeDestinasi);
        $latTo = deg2rad($longitudeAsal);
        $lonTo = deg2rad($longitudeDestinasi);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }

    // cek berat pengiriman, kalau lebih dari 50 kg tarif 1.5 kali lebih mahal
    private function cekBerat(float $berat, $tarif): float
    {
        if ($berat < 50) {
            return $tarif;
        } else {
            return $tarif * 1.5;
        }
    }
}
