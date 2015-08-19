<form method="post" action="index.php">
    <input type="text" name="string" placeholder="введите выражение"><br/><br/>
    <input type="submit" name="send" value="подсчитать">
</form>

<?PHP
$str=trim($_POST['string']);
$button=$_POST['send'];
if(empty($button)){
  return FALSE;
}
else {
    function calculator($str){
        $str = preg_replace("/[^0-9+\-.*\/]/", "" , $str);
        if ( $str == "" ) {
            $res= "строка не должна быть пустой";
        }
        else {
            eval("\$res=" . $str . ";" );
        }
        return $res;
    }
    echo "Ваш ответ: &nbsp;".  calculator($str);
}