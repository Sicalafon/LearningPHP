<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP Basics</title>
  </head>

    <body>

      <form>
          <input type="text" name="num0" placeholder="Number 0">
          <br>
          <input type="text" name="num1" placeholder="Number 1">
          <input type="text" name="num2" placeholder="Number 2">
          <input type="text" name="num3" placeholder="Number 3">
          <br>
          <input type="text" name="num4" placeholder="Number 4">
          <input type="text" name="num5" placeholder="Number 5">
          <input type="text" name="num6" placeholder="Number 6">
          <br>
          <input type="text" name="num7" placeholder="Number 7">
          <input type="text" name="num8" placeholder="Number 8">
          <input type="text" name="num9" placeholder="Number 9">
    <select name = "operator">

        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>

    </select>

    <br>
        <button type="submit" name= "submit" value="submit"> Calculate </button>
      </form>
    <p> The answer is: </p>

        <?php
          if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $result3 = $_GET['num3'];
            $result4 = $_GET['num4'];
            $result5 = $_GET['num5'];
            $result6 = $_GET['num6'];
            $result7 = $_GET['num7'];
            $result8 = $_GET['num8'];
            $result9 = $_GET['num9'];
            $result0 = $_GET['num0'];
            $operator = $_GET['operator'];
            switch ($operator) {
              case Add:
                echo $result0 + $result1;
                break;

              case Subtract:
                // code...
                echo $result0 - $result1;
                break;

              case Multiply:
                // code...
                echo $result0 * $result1;
                break;

              case Divide:
                // code...
                echo $result0 / $result1;
                break;

              case None:
                echo "You need to select a method";
                break;

            }
          }


        ?>


    </body>
</html>
