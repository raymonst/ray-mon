<?php

  $work = [
  	// name => [title, subtitle]
    "conversational-analytics" => ["Conversational Analytics","Enabling conversations with your data"],
    "lightning-messaging-framework" => ["Lightning Messaging Framework","Moving a design system forward"],
    "analytics-learning-app" => ["Analytics Learning App","Educating users with hands-on examples &amp; best practices"],
    "transit-quality-equity" => ["Transit Quality &amp; Equity","Visualizing urban mobility"],
    "sams" => ["SAMS","Streamlining access to government assistance"],
    "streetsavvy" => ["StreetSavvy","Rethinking the pedestrian experience"],
    "sf-transit-history" => ["San Francisco Transit History","Telling local history using interactive visualization"],
    "giorgio-armani-beauty-foundation-world" => ["Giorgia Armani Beauty Foundation World","Helping users find the perfect beauty products"]
  ];
  
  $workOrdered = array_keys($work);

  for ($x = 0; $x <= count($workOrdered)-1; $x++) {
	  $url = "work-" . $workOrdered[$x] . ".php";
	  array_push($workOrdered[$x], $url);
  } 
  
  print_r($workOrdered);

  
?>
