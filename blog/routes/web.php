<?php

$router->get('/ChartData',['middleware' => 'auth', 'uses' => "ChartDataController@allselect"]);
$router->get('/clientreview', ['middleware' => 'auth', 'uses' => "ClientReviewController@allselect"]);
$router->post('/contactsend', ['middleware' => 'auth', 'uses' => "ContactController@contactsend"]);
$router->get('/onselectfour',['middleware' => 'auth', 'uses' => "CourseController@onselectfour"]);
$router->get('/onselectall',['middleware' => 'auth', 'uses' => "CourseController@onselectall"]);
$router->post('/selectdetails', ['middleware' => 'auth', 'uses' => "CourseController@selectdetails"]);
$router->get('/footer',['middleware' => 'auth', 'uses' => "FooterController@onselect"]);
$router->get('/info', ['middleware'=>'auth','uses'=> "informationEtcController@onselect"]);
$router->get('/project3', ['middleware' => 'auth', 'uses' => "ProjectController@Select3"]);
$router->get('/projectAll',['middleware' => 'auth', 'uses' => "ProjectController@SelectAll"]);
$router->post('/projectDetails', ['middleware' => 'auth', 'uses' => "ProjectController@SelectDetails"]);
$router->get('/video', ['middleware' => 'auth', 'uses' => "VideoController@onselect"]);
$router->get('/total',['middleware' => 'auth', 'uses' => "TotalController@onselect"]);
$router->get('/techdesc', ['middleware' => 'auth', 'uses' => "TechDescController@onselect"]);
$router->get('/hometop', ['middleware'=>'auth','uses'=>"HomeTopController@onselect"]);
$router->get('/services', ['middleware'=>'auth','uses'=> "ServiceController@onselect"]);



