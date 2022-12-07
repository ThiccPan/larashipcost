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




