<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
    <link rel="stylesheet" href="css/classes.css">
</head>
<body>
<?php
if(isset($_POST['count'])){ //функція isset, перевіряє чи була встановлена глобальна змінна $_POST, яка порахувала у собі значення після натиснення кнопки "Count";
    $num1 = $_POST['num1']; //отримання першого числового значення у глобальну змінну $_POST із поля під назвою "num1"; 
    $num2 = $_POST['num2']; //отримання другого числового значення у глобальну змінну $_POST із поля під назвою "num2";
    $operation = $_POST['operation']; //отримання результату операції над двома числами у глобальну змінну $_POST через змінну $operation, у яку записуються дані із асоціативного масиву, після того як була вибрана дія над числами із поля 'operation'; 
    switch ($operation) {
        case 'Додавання':
            $results = $num1 + $num2;
            break;
        case 'Віднімання':
            $results = $num1 - $num2;
            break;
        case 'Множення':
            $results = $num1 * $num2;
            break;
        case 'Ділення':
            $results = $num1 / $num2;
            break;
    }
}

?>
<div class="calculator">
    <h1 class="title">Калькулятор</h1>
    <form method="post" action="index.php">
    <input type="text" name="num1" class="num" autocomplete="off" placeholder="Введіть перше число">
    <input type="text" name="num2" class="num" autocomplete="off" placeholder="Введіть друге число">
    <select class="opt" name="operation">
        <option value="Додавання">+</option>
        <option value="Віднімання">-</option>
        <option value="Множення">*</option>
        <option value="Ділення">/</option>
    </select>
    <input type="submit" name="count" value="Count" class="button">
    </form>
    <?php if(isset($_POST['count'])){ ?>
    <input type="text" value="<?php echo $results; 
    ?>" class="num">
    <!--після обробки данних над двома числами інформація записується у змінну $results та передається глобальній змінній $_POST. При натисненні кнопки під назвою 'count' видається результат;-->
    <?php }else{ ?>
        <input type="text" value="0" class="num">
    <?php } 
    ?> 
    <!--інше відобразити число 0;-->
</div>
</body>
</html>
