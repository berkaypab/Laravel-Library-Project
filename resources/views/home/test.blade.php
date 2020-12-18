<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>


<h1>Laravel TEST </h1>
Id no :{{ $id }};
<br> name : {{ $name }};

<br>
<?php

    echo "Id number : ", $id;
    echo "<br> name :", $name;


for($i =1;$i<=$id;$i++){
    echo "<br> $i - $name ";
}

?>
<a href="{{route('home')}}">Anasayfa</a>
</body>
</html>
