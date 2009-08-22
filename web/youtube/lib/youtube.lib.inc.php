<?php

/**
 * Copyright (c) 2009 West Virginia University
 * 
 * Licensed under the MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 */

// set-up Zend gData
$path = '/apache/htdocs/Mobi-Demo/lib/ZendGdata-1.8.4PL1/library';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Gdata_YouTube');

function printVideoFeed($videoFeed) {
  if ($phone == 'ip') { echo("<ul class='results'>"); }
  foreach ($videoFeed as $videoEntry) {
    printVideoEntry($videoEntry);
  }
  if ($phone == 'ip') { echo("</ul>"); }
}

function printVideoEntry($videoEntry) {
	
  $videoThumbnails = $videoEntry->getVideoThumbnails();

  $seconds = $videoEntry->getVideoDuration();
  $mins = floor ($seconds / 60);
  $secs = $seconds % 60;
  
  $updated = getdate(strtotime($videoEntry->getUpdated()->text)); 
  
  if ($phone == 'ip') {
	 echo("<li>");
  } else {
	 echo("<p class='focal' style='height: 62px'>");
  }
  
  echo("<img src='".$videoThumbnails[1]['url']."' hspace=6 height=60 width=80 align=left alt='YouTube Video Thumbnail'><a href='".$videoEntry->getVideoWatchPageUrl()."'>".$videoEntry->getVideoTitle()."</a><span class='smallprint'><br />Duration: ".$mins.":".$secs."<br />Updated: ".$updated['month']." ".$updated['mday'].", ".$updated['year']);

  if ($phone == 'ip') {
    echo("</li>")
  } else {
    echo("</p>")
  }
  
}
