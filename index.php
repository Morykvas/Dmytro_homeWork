














<?php   
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // // echo "все ок, прийняв"

    // if( $name ==="" || $email==="") {
    //     echo json_encode(array(
    //         'error' => "напишіть своє імя"
    //     ));

    // } else {
    //     $vName = "твоє ім я: " . $name;
    //     echo json_encode(array(
    //     'name' => $vName,
    //     'textFromAdmin' => 'Вітаю  ахуєнний користувач!',
       
    // ));
    // }
?>
<?php
    // /*ПОМЕЩАЕМ ДАННЫЕ ИЗ ПОЛЕЙ В ПЕРЕМЕННЫЕ*/
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $phone = $_POST["phone"];
    // $text_comment = $_POST["text_comment"];

    // /*ЗДЕСЬ ПРОВЕРЯЕМ ЕСЛИ ХОТЯ БЫ ОДНО ИЗ ПОЛЕЙ НЕ ЗАПОЛНЕНО МЫ ВОЗВРАЩАЕМ СООБЩЕНИЕ*/
    // if($name=="" or $email=="" or $phone=="" or $text_comment==""){ 
    //     echo "Заповніть усі поля";
    // }

    // else{
    //     /*ЕСЛИ ВСЕ ПОЛЯ ЗАПОЛНЕНЫ НАЧИНАЕМ СОБИРАТЬ ДАННЫЕ ДЛЯ ОТПРАВКИ*/
    //     $to = "morykvasdm@gmail.com"; /* Адрес, куда отправляем письма*/
    //     $subject = "Письмо с обратной связи"; /*Тема письма*/
    //     $headers = "MIME-Version: 1.0\r\n";
    //     $headers .= "Content-type: text/html; charset=utf-8\r\n";
    //     $headers .= "From: <test@mail.ru>\r\n";/*ОТ КОГО*/

    //     /*ВО ВНУТРЬ ПЕРЕМЕННОЙ $message ЗАПИСЫВАЕМ ДАННЫЕ ИЗ ПОЛЕЙ */
    //     $message .= "Ім'я користувача: ".$name."\n";
    //     $message .= "Пошта: ".$email."\n";
    //     $message .= "Телефон: ".$phone."\n";
    //     $message .= "Повідомлення: ".$text_comment."\n";

    //     /*ДЛЯ ОТЛАДКИ ВЫ МОЖЕТЕ ПРОВЕРИТЬ ПРАВИЛЬНО ЛИ ЗАПИСАЛИCM ДАННЫЕ ИЗ ПОЛЕЙ*/

    //     $send = mail($to, $subject, $message, $headers);

    //     /*ЕСЛИ ПИСЬМО ОТПРАВЛЕНО УСПЕШНО ВЫВОДИМ СООБЩЕНИЕ*/
    //     if ($send == "true")
    //     {
    //         echo "Ваше повідомлення відправлено. Ми вам відповімо в найближчий час.\r\n";
    //     }
    //     /*ЕСЛИ ПИСЬМО НЕ УДАЛОСЬ ОТПРАВИТЬ ВЫВОДИМ СООБЩЕНИЕ ОБ ОШИБКЕ*/
    //     else
    //     {
    //         echo "Не вдалось відправити, спробуйте щераз!";
    //     }
    // }

//?>
<?php 


//     $msg_box = ""; // в этой переменной будем хранить сообщения формы
//     $errors = array(); // контейнер для ошибок
//     // проверяем корректность полей
//     if($_POST['firstname'] === "")  $errors[] = "Поле 'Ваше имя' не заполнено!";
//     if($_POST['lastname'] === "")   $errors[] = "Поле 'ваше призвіще' не заполнено!";
  
 
//     // если форма без ошибок
//     if(empty($errors)){     
//         // собираем данные из формы
//         $message  = "Имя пользователя: " . $_POST['firstname'] . "<br/>";
//         $message .= "E-mail пользователя: " . $_POST['lastname'] . "<br/>";
         
       
//         // выведем сообщение об успехе
//         $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
//     }else{
//         // если были ошибки, то выводим их
//         $msg_box = "";
//         foreach($errors as $one_error){
//             $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
//         }
//     }
 
//     echo json_encode(array(
//      'result' => $msg_box
//  ));

?>
 <?php 
    // function test($name, $surname) {
    //     return $name .' '. $surname;
    // }
    // echo test("huy","morrykvas");

    // function sum($a, $b) {
    //     return $a / $b;
    // }
    //     echo sum(25, 2);
              
?>

<!-- <?php 
for ($i = 0; $i < 4; ++$i): ?>
                Hello, there!
<?php endfor; ?> -->



<!-- 
<div class="container-number">
            <div class="numbers-one">
                <?php  
                for ($i = 1; $i <= 400;  $i++)  : ?>

                         
                        <?php echo 1; ?>

                   <?php endfor; ?>  
            </div>
            <div class="numbers-two">
            <?php  
                for ($i = 1; $i <= 300;  $i++)  : ?>

                         
                        <?php echo 2; ?>

                   <?php endfor; ?>  
            </div>
            <div class="number-three">

            
          
            
            <?php
                $x = 0;    
                $y = 1; 
            ?>
                <?php  for($i=0; $i<=5; $i++) :?> 
                
                <?php $z = $x + $y;    
                   echo $z;
                    $x=$y;       
                    $y=$z;  
                 ?>   
            <?php endfor; ?>
            
    </div>
</div> -->



<!-- ОПЕРАТОРИ ЦИКЛУ PHP -->

<?php
    // $i = 1;
    //     while ($i <= 7) {
    //         echo " $i ";
    //         $i++;
    //     }
?>

<?php
    // $i = 1;
    //     do {
    //         echo " $i ";
    //         $i++;
    //     } while ($i <= 7)
?>

<?php
    // for($i = 1; $i <= 7; $i++) {
    //     echo " $i ";
    // }
?>



<?php
    // foreach (array as $value) { 
    //     //в тілі циклу ми виводимо вже змінну з в яку пеередали перебраний масив
    // }
?>

<?php

// $my_array = array("firstName"=> "dima", "lastName"=>"morykvas");

?>
<?php
// foreach ($my_array as $key => $value) {
//    echo " $key-$value ";
// }
?>




<!-- ОПЕРАТОРИ ЦИКЛУ PHP -->
            
            
<!-- <div class="container"> -->
    
<?php
    
    // $arr = ['hello', 'world','!'];
    // echo('<pre>');
    // print_r($arr);
    // echo('</pre>');


    // $arr = ['one'=> '1', 'two'=>'2', 'tree'=>'3'];
    // echo $arr['tree'];

    // $arr = [
    //     'авто'=> ['mersedes', 'bmw', 'tesla'],
    //     'літаки'=> ['ил-2','и-16', 'месершмит'],
    //     'кораблики'=>['авіаносець','есмінець','фрегат'],

    // ];

    // echo('<pre>');
    // print_r( $arr['літаки'][2]);
    // echo('</pre>');

        // $arr['name'][0] = 20;

        // echo"мені ". $arr['name'][0] ." років";
    

        //  for($i = 1; $i <= 7; $i++) {
        //     echo "<span>1</span>";
        // }

?>

<!-- </div> -->





<div class="container-one">

     <!-- коментарі в php  бувають однорядкові і багато рядкові -->

     <?php  
                        echo 'виводимо стрічку з текстом'; // одно рядкові

                        # однорядковий коментра

                    ?>
                    
                    <?php 
                        /* багаторядковий коментар 
                    
                        коментує від одноі стрічки і до безліч 
                        
                        */
                        
                    ?>

    <!-- коментарі в php  -->
    
    
    <!-- виводимо помилки PHP        помилки в PHP бувають трьох типів  Notice (повідомлення),  Warning (попередження), Fatal (фатальна) -->
                    <?php
                        error_reporting(E_ALL); //спрацює відповідно до налаштувань сервера
                    ?>

                    <?php 
                        ini_set('display_errors', 'on'); //команда яка покаже які у нас помилки
                    ?>


                    <?php 
                        error_reporting(E_ALL);
                        ini_set('display', 'on');  // можна писати одразу дві команди, таким чином одна з них точно спрацює і ми будемо бачити наші помилки
                    ?>

                    <?php   
                        error_reporting(0);
                        ini_set('display', 'off');// вже на викладеному сайті повідомлення про помилки відключаються 
                    

                    ?>
                    <br>

    <!-- виводимо помилки PHP -->


                <!-- echo print -->

                                <?php 
                                // echo // конструкція ехо непрацює як функція тому вона швидше виводить

                                // print // принт поводиться як функція яка завжди щось повертає     Застосуватися print може в умовних конструкціях з тернарнимм оператором

                                    $num = 20;

                                    ($num > 0) ? print 'Yes' : print 'No';

                                    echo ($num < 0) ? ' Yes' : 'No';

                                ?>
                                    <br>

                                <?php  


                                    echo 'Цей','рядок', 'був', 'створений', 'декількома параметрами.';  // виводимо беліч стрічок за умови що будуть  коми після кожної стрічки

                                    echo 'Цей'.  'рядок'.  'був'.  'створений'.  'за допомогою конкатенації.'; // echo ми можемо виводити без конкантенаціі безліч даних 

                                    print 'Цей'. 'рядок'. 'був'. 'створений'. 'за допомогою конкатенації.'; // print може виводити більше даних за умови що буде валідна конкатинація даних коли ми іх виводимо
                                


                                    // по замовчуванню краще використовувати echo окрім випадків де потрібно застосувати print
                                ?>
                                
                <!-- echo print -->
    
    <!-- змінні в php  та іх типи -->

                <br>

                    <?php

                        $a = 20; // integer цілі числа

                        $a = true; // boolean логічні дані true and false

                        $a = 'рядки'; // string рядки
                        
                        
                        $a = 1.234;
                        $b = 1.2e3;
                        $c = 7E-10;
                        $d = 1_234.567; // float або double числа з плаваючою точкою(комою)
                            
                        $array = []; // array масиви

                        $array = array();

                    ?>



    <!-- змінні в php  -->





                <!-- масиви php -->

                        <?php 
                            $numbers = array(); 
                        
                            $numbers = [];

                            $numbers = array(1, 2, 3, 4); // створюємо масив значень в нашому випадку це простий масив якй має дефолтний числовйи індекс, по якому ми можемо достукатись до наших значень

                            $numbers = [1, 35, 10, 9];

                            echo $numbers[2]; // тут ми виводимо значення під наши числовим індексом 2 тобто третій елемент масиву

                            $numbers[2] = 6; // ми модемо перевизначити якесь значення в масиві, але в тому випадку якщо є такий індекс в масиві

                            $numbers[6] = 25; // таким чином ми можемо додати до нашого масиву нове значення і вказати який числовий індекс для нього буде вказаний

                            $numbers[] = 50; // так ми можемо додати ще одне значення для масиву і він отримає числовий індекс який буде дорівнювати останньому елементу масиву
                                            // ми можемо в ході роботи додавати значення до наших масивів невказуючи його числовий індекс він буде додаватись автоматично в порядку черги, тобто кожен наступний буде останнім


                            print_r($numbers); // передаємо  в якості праметра наш масив так ми можемо побачит номера ключів та значення масиву


                            $numbers = [4=> 30, 24, 38,]; // ми можемо задати індекс лиш для одного елемента масиву, в такому випадку індексація елементів масиву буде рахуватись вже від того числа який вказаний в попередьому

                            print_r( $numbers);





                            //  АСОЦІАТИВНІ МАСИВИ..        

                            $words = array("red" => "червоний", "blue" => "синій","green" => "зелений");//використовуючи ключ можна змінити значення, так само як і у звичайному масиві

                            $words = ["red" => "червони", "blue" => "синій", "green" => "зелений"]; // записуєю масив двома способами


                            $countries = ["germany" => "berlin", "france" => "paris", "spain" => "madrid" ];

                            echo $countries["spain"];//таким способом ми виводи значення по пасоціативному ключу

                            $countries["spain"] = "barselona";// тут я перезаписую значення ключа в масиві 

                            echo $countries["spain"];// виводжу перезаписане знаяення

                            $countries["italy"] = "rome";// так ми визначаємо новий ключ та значення до нашого масиву і ми можемо додавати нові значення та ключі скільки нам потрібно

                            foreach($words as $english => $ukraine ) { // 
                                echo "$english :  $ukraine <br>" ;
                            }
                            // з змішаними масивами все працює аналогічно з додаванням значень 


                            // БАГАТОМІРНІ МАСИВИ..

                            $families = array( array("tom", "alice"),  array("bob", "kate") );

                            $families = [ ["tom", "alice"], ["bob", "kate"] ];

                            print_r($families[0]); //ми отримаємо значення нашого двомірного масиву, в нашому випадку перший масив "tom", "alice"
                            
                            $families[0][1]; // щоб отримати значення нашого вкладеного масиву, ми вказуємо спочатку індекс нашого вкладеного масиву а потім індекс нашого значення вже у самому масиві

                            $families = [ ["tom", "alice"], ["bob", "kate"], ["sam", "mary"]];

                            foreach($families as $family ) {

                                echo "<tr>";

                                    foreach($family as $user) {
                                        echo "<td> $user </td>";
                                    }

                                echo "<tr>";
                            }
                            // так ми пребираємо вкладенрий масив 5
                            # спочатку ми пребираємо вкладені масиви і предаємо іх змінну $family, a потім ми вже перебираємо кожен вкладений масив змінній $famili і предаємо іі в змінну $user
                            // таким чином ми перебрали вкладений масив і отримали потрібні нам імена
                            //  тобото тут використано вкладений цикл для перебирання масивів


                            $phones = array(
                                "apple"    => array("iPhone 12", "iPhone X", "iPhone 12 Pro"),
                                "samsung"  => array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
                                "nokia"    => array("Nokia 9.3", "Nokia 3.4"),
                            );

                            foreach( $phones as $brand => $item ) {

                                echo "<h3> $brand </h3>";

                                    echo "<ul>";

                                        foreach( $item as $kay => $value ) {
                                            echo "<li>  $value </li>";
                                        }
                                        
                                    echo "<ul>";


                            }
                        ?>

                <!-- масиви php -->


                <!-- Цикли PHP.. -->
                    
                        <?php  
                        
                            for($i = 1; $i <= 15; $i++) {
                                echo $i;
                            }
                            
                            // так смао ми можемо додавати від ємний лічильни $i-- ;
                            // або додавати до значення ношого числа ще значення, наприклад echo $i +=2 і до кожноі ітераціі буде додаватись вказане нами числор          
                        
                        ?>

                        <?php


                        
                        
                        ?>

                        

                            
                <!-- Цикли PHP.. -->


   



    <!-- функціі в php  -->

            <?php 
                var_dump();  //функція var_dump()  виводить типи наших даних та іх розміри, за допомого нього можна виводити теж числа та рядки так само як з командою echo  
            ?>  


    
    <!-- функціі в php  -->






    <!-- змінні  -->
    <!-- масиви  -->
    цикли
    


    
    функціі

            розібратися з лістом   метод зберігання даних 
            розібратись з гітом
            php файл домашка перший урок 

   

</div>



<div class="container-two">
        <div class="wrapp-thousand-one">

            <?php 

                echo"<div class='wrapp-number-one'>"; 

                    for ($i = 1; $i <= 1000; $i++) {
                    
                            echo "<span> 1 </span>";
                    
                    }

                echo "</div>";
            ?>
            <?php 

                echo "<div class='three-hundred-two'>";

                    for ($counter = 1; $counter <= 300; $counter++ ) {

                                echo "<span> 2 </span>";

                            if ($counter % 2 == 0) {
                                
                                echo "<span class='two-red'> 2 </span>";
                                
                            }  
                    }

                echo "</div>";
            ?>

            <?php 

                echo "<div class='wrapp-five-hundred'>";

                    for($counter = 1; $counter <= 500; $counter++ ) {

                        echo "<span> 5 </span>";

                        if($counter % 17 == 0){

                            echo "<span class='wrapp-five'> 5 </span>";
                        }
                    }

                echo "</div>"
            
            ?>
        </div>   
    
</div>


<div class="container-tree">
                <?php 
                    
                    // $alphabet = ["a"=>'А',  "b"=>'Б', "c"=>'В', "d"=>'Г', "e"=>'ґ', "f"=>'Д', "g"=>'Е', "h"=>'Є', "i"=>'Ж', "j"=>'З', "k"=>'И', "l"=>'І', "m"=>'Ї', "n"=>'Й', "o"=>'К', "p"=>'Л', "q"=>'М', "r"=>'Н', "s"=>'О', "t"=>'П', "u"=>'Р', "v"=>'С', "w"=>'Т', "x"=>'У', "y"=>'Ф', "z"=>'Х', "sh"=>'Ц', "zh"=>'Ч', "ch"=>'Ш', "ch"=>'Щ', "kh"=>'Ь', "th"=>'Ю', "thk"=>'Я',];


                    // $name = [
                            
                    //         "name"    => ["Dmytro", "Дмитро"],

                    //         "surname" => ["Morykvas","Мориквас"],

                    //         ];

                    //         foreach( $name as $key => $value ) {

                    //             echo "$key : $value[0]";
                    //             echo "<br>";

                    //         }
                            
                          
                
                ?>
                <?php 
                    
                   
                
                    // // Provides: <body text='black'>
                    // $bodytag = str_replace("%body%", "black", "<body text='%body%'>");
                    
                    // // Provides: Hll Wrld f PHP
                    // $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
                    // $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
                    
                    // // Provides: You should eat pizza, beer, and ice cream every day
                    // $phrase  = "You should eat fruits, vegetables, and fiber every day.";
                    // $healthy = array("fruits", "vegetables", "fiber");
                    // $yummy   = array("pizza", "beer", "ice cream");
                    
                    // $newphrase = str_replace($healthy, $yummy, $phrase);
                    
                    // // Provides: 2
                    // $str = str_replace("ll", "", "good golly miss molly!", $count);
                    // echo $count;
                ?>


              <?php  
                // $str = "Олегович Дмитро Мориквас ";

                // $exp = explode(' ', $str);

                // $newStr = trim($exp[2]) . ' ' . trim($exp[1]) . ' ' . trim($exp[0]);

                // echo $newStr;
              

                    
                $parts = explode(' ', 'Billy Bobby Johnson'); // $meta->post_title
                            // $name_first = array_shift($parts);
                            // $name_last = array_pop($parts);
                            // $name_middle = trim(implode(' ', $parts));

                            // echo 'First: ' . $name_first . ', ';
                            // echo 'Last: ' . $name_last . ', ';
                            // echo 'Middle: ' . $name_middle . '.';
            
            

                    // $fullName = "Paul Thomas Anderson";
                    // $lastname = end(explode(" ", $fullName));
                    // $firstname = str_replace($lastname,'',$fullName);
                    // echo  $firstname ;


                //     $name = "Дмитро Олегович Мориквас";
                //   echo 'Призвіще' .  substr( $name, 28, 30) . '<br>';
                //   echo 'Імя' . substr($name,0, ) . '<br>';
                //   echo 'Побатькові' . substr($name, 1) . '<br>';
                ?>
<?php
        // $a = array('green', 'red', 'yellow');
        // $b = array('avocado', 'apple', 'banana');
        // $c = array_combine($a, $b);

        // print_r($c);
        // ?>

<?php 
       
       $alphabet = ["a"=>'А',  "b"=>'Б', "c"=>'В', "d"=>'Г', "e"=>'ґ', "f"=>'Д', "g"=>'Е', "h"=>'Є', "i"=>'Ж', "j"=>'З', "k"=>'И', "l"=>'І', "m"=>'Ї', "n"=>'Й', "o"=>'К', "p"=>'Л', "q"=>'М', "r"=>'Н', "s"=>'О', "t"=>'П', "u"=>'Р', "v"=>'С', "w"=>'Т', "x"=>'У', "y"=>'Ф', "z"=>'Х', "sh"=>'Ц', "zh"=>'Ч', "ch"=>'Ш', "ch"=>'Щ', "kh"=>'Ь', "th"=>'Ю', "thk"=>'Я',];
        

                //  $name = [
                         
                        //  "name"    => ["Дмитро"],

                        //  "surname" => ["Мориквас"],

                        //  ];

                        //  foreach( $name as $key => $value ) {

                        //      echo "$key : $value[0]";
                        //      echo "<br>";

                        //  }
                        //     foreach(    $alphabet as $letter) {
                        //             echo $letter;
                        //     }
                            

                            // $a = [1, 2, 3, 4];
                            
                            // $result = array_map(function ($v) {
                            //     return chr(64 + $v);
                            // }, $a);
                            
                            // print_r($result);

                            
                          ?>
 
   
    

</div>

    

<p>
<!-- 1. Взять массив с именем и фалилией, поменять все буквы на английские, используя собственные массивы(Нужно будет заполнить)







2. Поместить все буквы с массива данных, и сложить другие имена с существующих букв(Список имен нужно будет загрузить самостоятельно)
Записать данные в массив, посчитать кол-во новых имен
             -->
</p>


<style>
.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}
    .container-tree {
        max-width:1200px;
        width:100%;
        margin: 100px auto 0 auto;
        background-color:#68d9af;
        
    }
    .wrapp-five-hundred {
        background-color:#dfeb60;
        max-width:600px;
    }
    .wrapp-five {
        border:1px solid black;
        box-sizing:content-box;
        padding: 0 0 0 4px;
    }
    .two-red {
        color:red;
    }
    .wrapp-thousand-one {
       
        display: flex;
        max-width:100%;
        flex-wrap:wrap;

    }
    .three-hundred-two {
        max-width:600px;
        width:100%;
        background-color:#2fc9d4;
    }
    .wrapp-number-one {
        /* max-width:600px; */
        background-color: #d968d5;
    }
    span {
        
    }
    .container-one {
        max-width: 1200px;
        width:100%;
        margin:0 auto;
        border:1px solid black;
        display:none;
    
    }
    .container-two {
        max-width: 1200px;
        width:100%;
        margin:0 auto;
        margin-top:200px;
    
    }
    .container-number {
        display:flex;
        flex-wrap:wrap;

    }
    .numbers-one {
        width: 50%;
        height:200px;
        background-color: aqua;
        display:flex;
        flex-wrap:wrap;

    }
    .numbers-two {
        width: 50%;
        height:200px;
        background-color: green;
        display:flex;
        flex-wrap:wrap;
    }
    .number-three {
        width: 50%;
        height:200px;
        background-color: yellow;
        display:flex;
        flex-wrap:wrap;
    }
    p {
        margin: 0;
    }
    body {
        height:200vh;
    }
</style>