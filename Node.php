<?php
namespace implement_method_of_arraylist;

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $next = NULL;
    }

    public function getData()
    {
        return $this->data;
    }
}