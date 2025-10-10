<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>Enter First Number:</td>
                <td><input type="number" name="num1" step="any" required></td>
            </tr>
            <tr>
                <td>Enter Second Number:</td>
                <td><input type="number" name="num2" step="any" required></td>
            </tr>
            <tr>
                <td>Select Operation:</td>
                <td>
                    <select name="op">
                        <option value="add">Addition</option>
                        <option value="sub">Subtraction</option>
                        <option value="mul">Multiplication</option>
                        <option value="div">Division</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Calculate">
                </td>
            </tr>
        </table>
    </form>

    <?php
    function calculator($a, $b, $op) {
        switch($op) {
            case "add":
                return $a + $b;
            case "sub":
                return $a - $b;
            case "mul":
                return $a * $b;
            case "div":
                return ($b != 0) ? $a / $b : "Cannot divide by zero";
            default:
                return "Invalid Operation";
        }
    }

    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        $result = calculator($num1, $num2, $op);
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
