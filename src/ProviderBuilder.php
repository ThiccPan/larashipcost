<?php

namespace ThiccPan\Larashipcost;

use ThiccPan\Larashipcost\Builder;
use ThiccPan\Larashipcost\Provider;
use ThiccPan\Larashipcost\RajaOngkirProvider;
use ThiccPan\Larashipcost\RatuOngkirProvider;

class ProviderBuilder implements Builder {

    protected Provider $provider;
    
    public function setIdProvinsi($idProvinsi): self
    {
        $this->idProvinsi = $idProvinsi;

        return $this;
    }

    public function setIdKota($idKota): self
    {
        $this->idKota = $idKota;

        return $this;
    }

    public function setDestination($idDestination): self
    {
        $this->idDestination = $idDestination;

        return $this;
    }

    public function setWeight($weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function setCourier($courier): self
    {
        $this->courier = $courier;

        return $this;
    }

    public function build($type): Provider
    {
        if ($type == 'rajaongkir') {
            $this->provider = new RajaOngkirProvider($this->idProvinsi, $this->idKota, $this->idDestination, $this->weight, $this->courier);
        } else if ($type == 'ratuongkir') {
            $this->provider = new RatuOngkirProvider($this->idProvinsi, $this->idKota, $this->idDestination, $this->weight, $this->courier);
        }

        return $this->provider;
    }
}

?>