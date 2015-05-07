<?php

/**
 * LinkNode Class
 * Object that holds a data, pointer for next
 */
class ListNode {
    
    
    public $data; /* data will hold value of this object */
    
    public $next; /* next will hold address of the Node infront of it */
 
    /* constructor */
    public function __construct($data) {
        $this->data = $data;
        $this->next = null; // nothing next to it yet on creation
    }
    
    public function readNode() {
        return $this->data;
    }
    
}
