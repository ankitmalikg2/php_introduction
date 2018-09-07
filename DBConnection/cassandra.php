<?php

$cluster   = Cassandra::cluster()
               ->withContactPoints('127.0.0.1')
               ->build();

###### Cluster points #######
//$cluster = Cassandra::cluster()
//               ->withContactPoints('10.0.1.24', 'example.com', 'localhost')
//               ->withPort(9042)
//               ->build();
//$session = $cluster->connect();


######## Persistent Session ########
//$cluster = Cassandra::cluster()
//               ->withPersistentSessions(false)
//               ->build();
//$session = $cluster->connect();


$session   = $cluster->connect("simplex");
$statement = new Cassandra\SimpleStatement("SELECT * FROM playlists");
$result    = $session->execute($statement);
echo "Result contains " . $result->count() . " rows";