<?php

namespace ThiccPan\Larashipcost;

interface Builder
{
    public function setIdProvinsi($idProvinsi): self;

    public function setIdKota($idKota): self;

    public function setDestination($idDestination): self;

    public function setWeight($weight): self;

    public function setCourier($courier): self;

    public function build($provider): Provider;
}

abstract class Provider
{
    protected $idProvinsi;

    protected $idKota;

    protected $idDestination;

    protected $weight;

    protected $courier;

    public function getShippingCost() {}
}

interface ProvinsiBuilder
{
    public function getProvinsi();
}

interface KotaBuilder
{
    public function getKota();
}
