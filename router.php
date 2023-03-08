<?php

const ROUTES = array(
  '/'                       => 'pages/index.php',
  '/work'                   => 'pages/index.php',
  '/blog'                   => 'pages/blog.php',
  '/contact'                => 'pages/contact.php',
  // '/contact/confirmation'   => 'pages/confirmation.php',
  '/about'                  => 'pages/about.php',
  '/work/scribbly'          => 'pages/scribbly.php'
);

function match_static($uri)
{
  // Match route as is; match "/public"
  if (file_exists('.' . $uri)) {
    return $uri;
  }

  // Look for static resource in public folder;
  // match /favicon.ico, etc.
  $public_path = './public' . $uri;
  if (file_exists($public_path)) {
    return $public_path;
  }

  return NULL;
}

function match_routes($uri, $routes)
{
  // If the URI ends with /, remove it
  if (preg_match('/^\/.+\/$/', $uri)) {
    $uri = preg_replace('/\/$/', '', $uri);
  }

  if (array_key_exists($uri, $routes)) {
    return $routes[$uri];
  } else {
    return NULL;
  }
}

// Grabs the URI and separates it from query string parameters
error_log('');
error_log('HTTP Request: ' . $_SERVER['REQUEST_URI']);
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

if ($php_file = match_routes($request_uri, ROUTES)) {

  // Include PHP file from route look-up
  require $php_file;
} else if ($file_path = match_static($request_uri)) {

  if ($file_path == $request_uri) {
    // let the web server respond for static resources
    return False;
  } else {
    // Serve up file from public folder
    readfile($file_path);
  }
} else {

  error_log("  404 Not Found: " . $request_uri);
  http_response_code(404);

  $ext = pathinfo($request_uri, PATHINFO_EXTENSION);
  if (!$ext) {
    // There's no file extension, this probably is a dynamic resource.
    // Display 404 page.

    require 'pages/404.php';
  }
}
