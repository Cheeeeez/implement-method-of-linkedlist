<?php
include_once "MyLinkedList.php";

$myLinkedList = new MyLinkedList();
$myLinkedList->addFirst(2);
$myLinkedList->addLast(1);
$myLinkedList->addLast(4);
$myLinkedList->add(2,3);
$linkData = $myLinkedList->readLinkedList();
echo implode(" ", $linkData) . "<br>";
echo $myLinkedList->totalNodes() . "<br>";
echo $myLinkedList->get(2) . "<br>";
echo $myLinkedList->getFirst() . "<br>";
echo $myLinkedList->getLast() . "<br>";
$myLinkedList->remove(0);
echo implode(" ", $myLinkedList->readLinkedList()) . "<br>";
echo $myLinkedList->totalNodes() . "<br>";
$myLinkedList->clear();
var_dump($myLinkedList);
echo $myLinkedList->totalNodes();
?>                                                                                                                                                                                                                                                                                                                                                                                                                                      