<?php
include("includes/config.php");

$bucketlist = new Bucketlist();

var_dump($bucketlist->getItems());