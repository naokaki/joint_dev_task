<?php
# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];
  # 以下に回答を記載
array_push($names,"斎藤");
print_r($names);
echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
$array3 = array_merge($array1, $array2);
print_r($array3);
echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
$three_count = 0;
foreach ($numbers as $number) {
  if ($number == 3) {
    $three_count++;
  }
}
echo "3は".$three_count."個あります。";
echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
foreach ($sports as $key => $value) {
  if (is_null($value)) {
    unset($sports[$key]);
 }
}
print_r($sports);
echo PHP_EOL;


print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
var_export(empty($array1));
echo PHP_EOL;
var_export(empty($array2));
echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
foreach ($numbers1 as $value) {
  $value *= 10;
  $numbers2[] = $value;
}
print_r($numbers2);
echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
  $array = array_map("intval", $array);
  # 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
$programming_languages = array_map("ucfirst",$programming_languages);
$upper_case_programming_languages = array_map("strtoupper",$programming_languages);
  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
$member_number = 0;
foreach ($names as $name) {
  $member_number ++;
  $members[] = "会員No.".$member_number." ".$name;
}
print_r($members);
echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載
foreach ($foods as $food) {
  if (false!==strpos($food,"うに")) {
    echo "好物です".PHP_EOL;
  }else {
    echo "まぁまぁ好きです".PHP_EOL;
  }
}
echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
foreach ($sports as $sport) {
  if (is_array($sport)) {
    $new_sports = array_merge($new_sports,$sport);
  }else {
    $new_sports[] = $sport;
  }
}
$new_sports = array_unique($new_sports);
$new_sports = array_values($new_sports);

echo "ユーザーの趣味一覧".PHP_EOL;
$number = 0;
foreach ($new_sports as $new_sport) {
  $number ++;
  echo "No".$number." ".$new_sport.PHP_EOL;
}

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
echo $data["user"]["name"];
echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載
$user_data["age"] = $update_data["age"];
$user_data["address"] = $update_data["address"];
print_r($user_data);
echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

# 以下に回答を記載
$data = array_values($data);
print_r($data);
echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
function isAge($data){
  if (array_key_exists("age",$data)) {
    echo "OK".PHP_EOL;
  }else {
    echo "NG".PHP_EOL;
  }
}
isAge($data1);
isAge($data2);
echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載
foreach ($users as $user) {
  echo "私の名前は".$user["name"]."です。年齢は".$user["age"]."歳です".PHP_EOL;
}
echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加
  private $name;
  private $age;
  private $gender;

    public function __construct($name,$age,$gender){
      $this->name = $name;
      $this->age = $age;
      $this->gender = $gender;
    }
    public function info(){
      echo $this->name.PHP_EOL;
      echo $this->age.PHP_EOL;
      echo $this->gender.PHP_EOL;
    }
}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加
class Man
{
  public $name;
  public $age;
  public function __construct($name,$age)
  {
    $this->name=$name;
    $this->age=$age;
  }
  public function introduce(){
    if($this->age > 20){
      echo "こんにちは,　あじーと申します。宜しくお願いいたします。".PHP_EOL;
    }else{
      echo "はいさいまいど～,　ゆたぽんです！！！";
    }
  }
}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{
  # コードを追加
  public $name;
  public $age;
  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }
}

class Zoo
{

  # コードを追加
public $zoo_name;
public $fee;
public function __construct($zoo_name,$fee){
  $this->zoo_name = $zoo_name;
  $this->fee = $fee;
}
public function info_entry_fee($human){
  if (0<=$human->age && $human->age <= 5){
    echo $human->name."さんの入場料金は".$this->fee["infant"]."円です。".PHP_EOL;
  }else if(6<=$human->age &&$human->age <= 12){
    echo $human->name."さんの入場料金は".$this->fee["children"]."円です。".PHP_EOL;
  }else if(13<=$human->age &&$human->age <= 64){
    echo $human->name."さんの入場料金は".$this->fee["adult"]."円です。".PHP_EOL;
  }else if(65<=$human->age &&$human->age <= 120){
    echo $human->name."さんの入場料金は".$this->fee["senior"]."円です。".PHP_EOL;
  }
}
}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;

$numbers = range(1,30);
foreach($numbers as $number){
  if ($number % 3 == 0 && $number % 5 == 0){
    echo "FizzBuzz".PHP_EOL;
  }else if ($number % 3 == 0 && $number % 7 == 0){
    echo "FizzHoge".PHP_EOL;
  }else if($number % 5 == 0 && $number % 7 == 0){
    echo "BuzzHoge".PHP_EOL;
  }else if($number % 3 == 0){
    echo "Fizz".PHP_EOL;
  }else if($number % 5 == 0){
    echo "Buzz".PHP_EOL;
  }else if($number % 7 == 0){
    echo "Hoge".PHP_EOL;
  }else{
    echo $number.PHP_EOL;
  }
}
 ?>
