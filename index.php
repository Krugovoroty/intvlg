<!-- 1 часть про новость -->

<div style="width: 300px; border: 2px solid black; padding: 5px;">
<?php


ini_set("auto_detect_line_endings", true);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function first_part_str($str) {
    $a_cut_arr = explode(" ", $str);
    $a_cut_arr = array_splice($a_cut_arr, 0, -2);
    return implode(" ", $a_cut_arr);
}

function second_part_str($str, $link) {
    $a_cut_arr = explode(" ", $str);
    $last_two_word = array_splice($a_cut_arr, -2);
    return '<a href="' . $link . '">' .  $last_two_word[0] . " " . $last_two_word[1] . "</a>";

}

function cut_news($news, $link) {
    $news_cut = "";
    if (strlen($news) > 180) {
        $news_cut = mb_substr($news, 0, 180) . "...";
    }

    return first_part_str($news_cut) . " " . second_part_str($news_cut, $link);
    
}

$link = "/news";
$a = "Мы занимаемся e-commerce-проектами и автоматизацией бизнеса клиентов с помощью веб-технологий. Мы разрабатываем веб-сервисы, интернет-порталы, крупные интернет-магазины и системы автоматизации процессов.";

echo cut_news($a, $link);

?>
</div>

<!-- 4 часть про массив -->


<?php



$num_arr = [];

for ($i = 0; $i <= 100; $i++) {
    array_push($num_arr, random_int(0, 20));
}

echo implode(" ", $num_arr);

$result = 0;

for ($i = 0; $i < count($num_arr) - 1; $i++) {
    if ($num_arr[$i] === $num_arr[$i + 1]) {
        $result += 1;
    }
}

echo "<br>";
echo $result;

// 2 часть про картинку

ini_set('memory_limit', '-1');
if (file_exists("resized.jpg") === false) {
    $image = '20k.jpg';
    $image = imagecreatefromjpeg($image);
    $imgResized = imagescale($image , 200, 100);
    imagejpeg ($imgResized, "resized.jpg");
} 


?>
<br>
<img src="resized.jpg">



