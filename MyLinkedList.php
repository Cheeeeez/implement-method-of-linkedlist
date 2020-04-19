<?php
include_once "Node.php";

class MyLinkedList
{
    protected $head;
    protected $tail;
    protected $numNodes;

    public function __construct()
    {
        $head = null;
        $tail = null;
        $this->numNodes = 0;
    }

    public function addFirst($data)
    {
        $node = new \implement_method_of_arraylist\Node($data);
        $node->next = $this->head;
        $this->head = $node;

        if ($this->tail == null) {
            $this->tail = $node;
        }
        $this->numNodes++;
    }

    public function addLast($data)
    {
        if ($this->numNodes == 1) {
            $node = new implement_method_of_arraylist\Node($data);
            $this->head->next = $node;
            $this->tail = $node;
            $this->numNodes++;
        } elseif ($this->head != null) {
            $node = new implement_method_of_arraylist\Node($data);
            $this->tail->next = $node;
            $this->tail = $node;
            $this->numNodes++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($index, $data)
    {
        if ($this->isInteger($index)) {
            if ($index == 0) {
                $this->addFirst($data);
            } elseif ($index < 0 || $index > $this->numNodes) {
                die("Index could not be less than 0");
            } else {
                $node = new \implement_method_of_arraylist\Node($data);
                $current = $this->head;
                $previous = $this->head;

                for ($i = 0; $i < $index; $i++) {
                    $previous = $current;
                    $current = $current->next;
                }
                $node->next = $current;
                $previous->next = $node;
                $this->numNodes++;
            }
        } else {
            die('Integer value required');
        }
    }

    public function remove($index)
    {
        $current = $this->head;
        $previous = $this->head;

        if ($index == 0) {
            $this->head = $this->head->next;
            $this->numNodes--;
        } elseif ($index >= $this->size() || $index < 0) {
            die("index out of range");
        } else {
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $previous->next = $current->next;
            $this->numNodes--;
        }
    }

    public function get($index)
    {
        $current = $this->head;
        $previous = $this->head;

        if ($index >= $this->size() || $index < 0) {
            die("index out of range");
        } else {
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
        }
        return $current->data;
    }

    function getFirst()
    {
        return $this->head->data;
    }

    function getLast()
    {
        return $this->tail->data;
    }

    function clear()
    {
        $this->tail = new \implement_method_of_arraylist\Node(null);
        $this->numNodes = 0;
    }

    public function readLinkedList()
    {
        $listData = [];
        $current = $this->head;

        while ($current != null) {
            array_push($listData, $current->getData());
            $current = $current->next;
        }
        return $listData;
    }

    public function totalNodes()
    {
        return $this->numNodes;
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

    public function size()
    {
        return $this->numNodes;
    }
}
