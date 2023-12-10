<?php namespace App\Controller;


class Validation
{
    public function check(array $data , string $fild) : bool
    {
        return isset($data[$fild]);
    }
}
