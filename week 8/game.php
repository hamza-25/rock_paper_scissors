 <?php
if (!isset($_GET['name']) || strlen($_GET['name']) < 1) {
    die('Name parameter missing');
}
if (isset($_POST["logout"])) {
    header("Location: index.php");
    return;
}
$names = ['Rock', 'Paper', 'Scissors'];
$human = isset($_POST['human']) ? $_POST['human'] + 0 : -1;
$computer = rand(0,2);
function check($computer, $human)
{
    if ( $human == $computer ) {
        return "Tie";
    } else if ( $human == 1 AND $computer == 0 ){
        return "You Win";
    } else if ( $human == 2 AND $computer == 1 ){
        return "You Win";
    } else if ( $human == 0 AND $computer == 2 ){
    	return "You Win";
    } else if ( $human == 2  and $computer == 0 ) {
        return "You Lose";
    } else if ( $human == 1  and $computer == 2) {
        return "You Lose";
    } else if ( $human == 0  and $computer == 1 ) {
        return "You Lose";
    }
    
    return false;
}
$result = check($computer, $human);
?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8bd62230</title>
    <style>

      pre { 
        display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;}
    </style>
</head>

<body>
    <?php
    if (isset($_REQUEST['name'])) {
        echo "welcome : ";
        echo htmlspecialchars($_REQUEST['name']);
    }
    ?>
    <form method="post">
        <select name="human">
            <option value="-1">Select</option>
            <option value="0">rock</option>
            <option value="1">paper</option>
            <option value="2">scissors</option>
            <option value="3">test</option>
        </select>
        <input type="submit" value="Play" name="Play">
        <input type="submit" value="logout" name="logout">
    </form>
    <pre >
        <?php
        if ($human == -1) {
            print "Please select a strategy and press Play.";
        } elseif ($human == 3) {
            for ($c = 0; $c < 3; $c++) {
                for ($h = 0; $h < 3; $h++) {
                    $r = check($c, $h);
                    echo "human play = " . $names[$h] . " | computer play = "  . $names[$c] . " result = " . "$r \n";
                }
            }
        } else {
            echo "Your Play=$names[$human] Computer Play=$names[$computer] Result=$result\n";
        }
        ?>
    </pre>

</body>

</html> 