<?php
// Todo.phpを読み込む
require_once('Models/Todo.php');
require_once('config/dbconnect.php');

// ユーザーが入力したタスクを変数に格納
$task = $_POST['task'];

// Todoクラスのインスタンスを作成し、
// 変数todoに入れる

$todo = new Todo();

// Todoクラスのcreateメソッドを実行
$todo->create($task);

echo $task;
echo '<br>';

// 一覧画面に戻る
header('Location: index.php');