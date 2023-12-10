<?php namespace App\Controller;


class Validation
{
    public function search(array $data , string $fild) : bool
    {
        return isset($data[$fild]);
    }
}
