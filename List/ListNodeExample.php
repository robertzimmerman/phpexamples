<?php

require('LinkList.php');
require('ListNode.php');

$linkList = new LinkList();

//echo $linkList->isEmpty()."\n";

$newNode = new ListNode("Harlet");
$newNode2 = new ListNode("Marlet");

printf("new node created as %s \n",$newNode->data);

$linkList->addNode($newNode);
$linkList->addNode($newNode2);
$linkList->addNode(new ListNode("Scarlet"));
$linkList->printNodes()."\n";

//printf("deleting lastest node \n");

//$linkList->deleteLatestNode();
echo "\n";

$linkList->printNodes();
echo "\n";


printf("Finding Node %s \n", "Marlet");

$linkList->searchIfExist("Marlet");

$linkList->deleteNodeAtEnd()."\n";

$linkList->printNodes()."\n";

