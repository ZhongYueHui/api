<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');
$page = $_GET['page'];
$comments = $_POST['content'];
echo $comments;
$arr2 = array(
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "沙发"
  ),
  array(
    "name" => "niming",
    "time" => "2017-5-5 12：12：12",
    "content" => "板凳"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "不错哦"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：15：12",
    "content" => "谢谢哦"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：16：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：17：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：18：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "王五",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "张三",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "1",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "niming",
    "time" => "2017-5-5 12：12：12",
    "content" => "今天天气真的很好啊dsa"
  ),
  array(
    "name" => "3",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "4",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "5",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "6",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "7",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "8",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "9",
    "time" => "2017-5-6 12：12：12",
    "content" => "今天天气真的很好啊"
  ),
  array(
    "name" => "10",
    "time" => "2017-5-6 12：12：12",
    "content" => "xixixi "
  )
);
//   array_unshift($arr2,$comments);
echo json_encode(array_slice($arr2, 0, 10 * $page));
