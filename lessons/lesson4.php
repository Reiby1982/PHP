<?php
    // LESSON 4
echo "Взаимодействие с пользователем";
//получение запроса пользователя
$link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
var_dump($link);

$parsed_url = parse_url($link); // Функция разбития ссылки
var_dump($parsed_url);

/* требования к url
1. латинские буквы
2. цифры
3. некоторые знаки препинания
4. остальные символы должны быть перекодированны
------------------------------------------------------------------------------------------------
Функции для кодировки
1. urlencode($url_str) 
2. rawurlencode()code($url_str);

Функции для раскодировки
1. urldecode()
2. rawurldecode()
*/
//---------------------------------------------------------------------------------------------
//Формирование строки запроса (например для отправки на другой сервер)
// http_build_query(query_data: массив с параметрами);
// все что после вопросительного знака в строке url
    
// параметры
//?param1=value1&param2=value2
    
$params = [
  'id' => 1,
  'login'=>'qwe'
];

$url = 'https://oauth.vk.com/autorize?' . 
    http_build_query($params);

var_dump($url);
$get = $_GET;
var_dump($get);

// методом GET получаем только параметры
//---------------------------------------------------------------------------------------------
//?params[]=1&params[]=2&params[]=3

//var_dump($_POST['login']);


//$user = [
//    [
//        'login' => '1',
//        'pwd' => '2'
//    ],
//        [
//        'login' => 'qwer1',
//        'pwd' => '321'
//    ]
//];

//function checkUsers($users){
//    $post = $_POST;
////    if (!isset($post['login'])) {
////        return false;
////    }
//        var_dump('$user', $user['login']);
//
//    foreach ($users as $user) {
////        foreach($user as $key => $value) {
//            if ($post['login'] == $user['login']) {
//                        
//                if($post['pwd'] == $user['pwd']) {
//                    echo "Вы вошли как " . $post['login'];
//                    return true;
//                } 
//                    
//            } 
//        }
//    echo "Вы не вошли";
//    return false;
//    }
//
//if (isset($_POST['login'])) {
//  checkUsers($user);  
//}

//if($_POST['login']=='qwer') {
//    echo "Вы вошли как QWER ";
//} else {
//    echo "Вы не вошли :(";
//}
var_dump(trim($_POST['login']));

//-----------------------------------------------------------------------------
//ОБЯЗАТЕЛЬНА переданные пользователем значения на html => js 
// защита от прямых атак
//1. trim($str); - удаляет побелы и другие символы
//2. isset(); - проверка на значение
//3. переопределение суперглобальных массивов
//4. очистка суперглобальных массивов

// Защита от xss атак
// 1. strip_tags($str); - удаляет теги
//2. htmlspecialchars($str) - преобразует в специальные символы
//3. htmlentities($str)

// Защита от атак на базу
//addcslashes($str) - экранирует символы
//stripslashes() - удаляет символы
//mysqli_real_escape_string($str);

// Фильтрация данных
//filter_var(var, filter);
//filter_var_array(array);

?>
<a href="lesson1.php?id=4&login=Пупкин">Index</a>


<!--//---------------------------------------------------------------------------------------------->
<!--//Метод POST передает данные формы-->
<!--Метод записывает все, что пишет пользователь-->
<!--После нажатия кнопки значения уходят сразу в php, это не очень хорошо. Нужна максимальная проверка на клиенте-->
<form method="post" action="lesson4.php">
    <label for="enter">Введите</label>
    <input id="enter" type="text" name="login">
    
    <label for="pwd">Введите пароль</label>
    <input id="pwd" type="password" name="pwd">
    
    <button type="submit">Войти</button>
</form>
























