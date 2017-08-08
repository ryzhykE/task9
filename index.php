<?php
include ('lib/HtmlHelper.php');


$select = ['value1'=>'Hello', 'value2'=>'World', 'value3'=>'Hello'];
$select = HtmlHelper::select('form-control',1,false, $select);

$header = ['id', 'Name', 'Password'];
$data = ['1', 'Evgen', 'hello123'];
$table = HtmlHelper::tables('table table-bordered',$header,$data );

$list = ['1'=>'Hello', '2'=>'World', '3'=>'Hello'];
$list = HtmlHelper::listUlOl('ol',$list);

$data = ['value1'=>'Hello', 'value2'=>'World', 'value3'=>'Hello'];
$listDt = HtmlHelper::listDlDtDd($data);

$data = ['first'=>'one', 'second'=>'two', 'third'=>'three'];
$radio = HtmlHelper::radiobutton('btn btn-primary',$data,'group');

$data = ['first'=>'one', 'second'=>'two', 'third'=>'three'];
$checkbox = HtmlHelper::checkbox('form-group',$data ,'one');


include ('template/index.php');
