<?php

/**
 *  Class LinkList
 *  implementation of a Singular Linked List where a List of Objects are joined
 *  together by pointers of the Node pointing to the next.
 *  Lets do LastIn FirstOut first
 */
class LinkList {
    
    private $headNode; /*Link the first node to the list */
    
    private $currentNode; /* points to the current head node */
    
    /* constructor - creates an empty list*/
    function __construct() {
        $this->headNode = null;
        $this->currentNode = null;
        $this->counter = 0;
    }
    
    public function isEmpty() {
        return ($this->headNode == NULL);
    }
    
    
    public function addNode(ListNode $newNode) {
        // put the node in the beginning --- technically do we need this
        if ($this->headNode == NULL) {
            $this->headNode = $newNode;
            $newNode->next = NULL;
        } else /* take that node and put it in the beginning */{
            $newNode->next = $this->headNode; // have new node next point to current headNode
            $this->headNode = $newNode;
        }
        $this->counter += 1;
    }
    
    
    // here we should delete the latest node coming in
    // if we want to delete the latest node we do the following
    /**
     * first we check if headNode has next> == null if so then its a simple
     *      headNode = null (only one in the stack)
     * if next-> has a ListNode then move headNode to that object
     */
    // simple version
    public function deleteLatestNode() {
        if ($this->headNode == NULL) {
            // throw an exception
        } else {
            
            $currentNode = $this->headNode;
            if ($currentNode->next == null) {
                $this->headNode = null;
            } else {
                $this->headNode = $currentNode->next;
            }
            $this->counter -= 1;
        }
    }
    
    /**
     * Counter will be in play here O(n)
     * traverse through the list till you are counter - 1
     * set node->next to null
     * this is O(n) to go through the list and O(1) to remove it
     */
    public function deleteNodeAtEnd() {
        $currentNode = $this->headNode; // lets place our tag visit to the beginning of the list
        $counter = $this->counter;
        while($counter > 0) {
            printf('Counter = %d', $counter);
            if ($counter == 1) {
                printf("Deleting Last Node \n");
                $currentNode->next = null;
                return;
            }
            $currentNode = $currentNode->next;
            $counter--;
        }
        return printf("this can't be right \n");
    }
    
    /**
     * Search for a node
     * Traverse through the list and return if node is found
     * if not - return null
     */
    public function searchIfExist($data) {
        $currentNode = $this->headNode; // lets place our tag visit to the beginning of the list
        $counter = $this->counter;
        while($counter > 0) {
            if ($currentNode->data == $data) {
                printf("Found %s in Node [%d] \n", $currentNode->data, $counter);
                $this->counter -= 1;
                return;    
            } 
            $currentNode = $currentNode->next; // move currentNode object to the next node.
            $counter--;
        }
        return printf("No ListNode that has data %s\n",$data);
    }
    
    // print out a 
    /**
     *  what we are saying here is first if the stack is not empty then do the first node, then check
     *  if currentNode->next != null then we put currentNode to the next node and print again until
     *  currentNode->next is null. we know then that its empty.
     */
    
    public function printNodes() {
        $currentNode = $this->headNode; // lets place our tag visit to the beginning of the list
        $counter = $this->counter;
        while($counter > 0) {
                printf("List Node [%s] ---> ",$currentNode->data);
                $currentNode = $currentNode->next; // move currentNode object to the next node.
            $counter--;
        }
       
    }
    
}

