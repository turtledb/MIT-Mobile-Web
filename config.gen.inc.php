<?php

/**
 * Copyright (c) 2008 Massachusetts Institute of Technology
 * 
 * Licensed under the MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 */

/* Quick Configuration File for MIT Mobile Web OSP */

/* Institution & Org Info */
$inst_name        = "WVU";                                # name of educational institution. highly recommend an acronym.
$org_name         = "University Relations/Web Services";  # name of organization supporting this instance

/* Misc. Copy Configuration (where "copy" means text) */
$contact_addy      = "web_services@mail.wvu.edu"; # email address to contact w/ questions
$mobile_web_addy   = "m.asdb-cluster.wvu.edu";    # web address for the mobile web site
$main_site_addy    = "www.wvu.edu";               # web address for your regular web site
$email_ending	   = "mail.wvu.edu";              # ending email addy used on directory page example
$area_code         = "304";                       # area code for school
$exchange          = "293";                       # next three digits in a phone number for your school
$has_oc_prefix     = true;                        # does your school have a shorter, on-campus prefix?
$oncampus_prefix   = "3";						  # number for on-campus prefix
$has_dir_search_va = false;                       # does your school have voice-assisted directory search?
$dir_search_va_num = "304.293.0000";              # number for voice-assisted directory search
$dir_search_samp_l = "3042930000";                # long phone number example for directory search
$dir_search_samp_s = "30000";                     # short phone number example for directory search, leave empty if you don't want to use it

/* Shared Graphics Info */
$ip_bookmark_icon = "icon_wvu.png";      # bookmark graphic for iPhone. should be in web/ip/images
$ip_home_icon     = "wvu-logo-home.gif"; # home icon when user first pulls up your site on iphone. should be in web/home/ip/images
$homelink_icon    = "homelink_wvu.png";  # homelink breadcrumb graphic for iPhone. should be in web/ip/images
$non_ip_icon      = "wvu-logo.gif";      # header icon for non-iPhone phones. separate files should be in web/fp/images & web/sp/images

/* Emergency Info */
# WVU uses e2Campus for emergency alerts and we're using their RSS feed to populate info
$emergency_rss_feed = "http://feeds.omnilert.net/rss/d014a0436fd6c76e17d4931495231bea/b8d5ae4de409bcc5b5977f77e4222413/10/3178a/2/";

/* Bus Schedule Info */
$bus_schedule     = "mountain_line_schedule.php";          # file name of your bus schedule. should be in lib.
$day_keys = array("blue_line", "blue_and_gold_connector"); # key must much the bus schedule lib line keys
$night_keys = array();                                     # leave empty if you don't have any night-specific routes

/* Calendar Info (uses Google Calendar) */
$username = "wvucalendar";
$password = "Mountaineers#10";

$calendars = array();
$calendars['all'] = array('title' => 'All Events', 'user' => 'd95aensfsagjlvpsrp29d35pg5bi4kr8@import.calendar.google.com');
$calendars['academic'] = array('title' => 'Academics', 'user' => 'd259da0o994a5o42jr1vad2u3fa7g4ae@import.calendar.google.com');
$calendars['athletics'] = array('title' => 'Athletics', 'user' => 'rnle9udl9r9kl00qb1r1o7pb6oj57f34@import.calendar.google.com');
$calendars['lectures'] = array('title' => 'Lectures &amp; Speakers', 'user' => 'nkl93kssu9e2evgc9o5vfkssgq0v1rqs@import.calendar.google.com');
$calendars['special_events'] = array('title' => 'Special Events', 'user' => 'h3nc9ba8tslh4ovpu69rk206rpc9eg01@import.calendar.google.com');
$calendars['ext_special_events'] = array('title' => 'Extended Special Events', 'user' => 'bip4uahi9dla3k9rbgl8pltd9dtd20v6@import.calendar.google.com');

/* News Info - uses first entry as default entry */
$news_srcs = array();
$news_srcs['wvutoday'] = array('title' => 'WVU Today', 'url' => 'http://wvutoday.wvu.edu/xml/news_full.xml', 'need_the' => false, 'read_more' => false);
$news_srcs['da']       = array('title' => 'Daily Athenaeum', 'url' => 'http://www.da.wvu.edu/rss.php', 'need_the' => true, 'read_more' => true);
$news_srcs['hsc']      = array('title' => 'HSC', 'url' => 'http://health.wvu.edu/newsreleases/news-feed.aspx', 'need_the' => false, 'read_more' => true);
$news_srcs['oit']      = array('title' => 'OIT', 'url' => 'http://oit.wvu.edu/news/feed/', 'need_the' => false, 'read_more' => false);

/* Special Features */
$has_sms          = true;               # if you have a page showing SMS commands set to true


?>
