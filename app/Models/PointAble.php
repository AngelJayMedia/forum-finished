<?php

namespace App\Models;

interface PointAble
{
    public function awards();

    public function countAwards();

    public function addPoints($amount, $message);
}
