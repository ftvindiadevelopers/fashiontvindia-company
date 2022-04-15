<?php

require_once("router.php");

get('/', 'pages/index.php');
get('/michel-adam', 'pages/michel-adam.php');
get('/kashiff-khan', 'pages/kashiff-khan.php');
get('/channels', 'pages/channels.php');
get('/fashiontv', 'pages/fashiontv.php');
get('/ftv-apparels', 'pages/ftvapparels.php');
get('/features', 'pages/features.php');
get('/license', 'pages/franchise.php');

get('/careers', 'pages/career.php');
get('/privacy-policy', 'pages/privacy-policy.php');
get('/terms-and-conditions', 'pages/terms-and-conditions.php');

get('/api', 'api/api.php');

any('/404','templates/404.php');