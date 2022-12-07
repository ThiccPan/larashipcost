<?php

namespace ThiccPan\Larashipcost;
abstract class Provider
{
    protected $idProvinsi;

    protected $idKota;

    protected $idDestination;

    protected $weight;

    protected $courier;

    public function getShippingCost() {}
}