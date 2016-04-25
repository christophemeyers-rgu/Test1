<?php
/**
 * Created by PhpStorm.
 * User: 1511363
 * Date: 25/04/2016
 * Time: 09:52
 */


if($_SERVER['REQUEST_METHOD']==='POST'){
    $db = new MySQLi(
        "ap-cdbr-azure-east-c.cloudapp.net",
        "b7d9b3801e98ae",
        "0857bdb8",
        "MockDB"
    );

    $query = "INSERT INTO bugs (bugName, bugSummary, bugCategory)
              VALUES(?,?,?) ";

    $stmt = $db->prepare($query);

    $stmt->bind_param("sss",$_POST['bugname'],$_POST['bugsummary'],$_POST['bugcategory']);
    $stmt->execute() or die("Error: ".$query."<br>".$db->error);

    header("Location: showbugs.php");
}
elseif($_SERVER['REQUEST_METHOD']==='GET'){

}
else{
    header("Location: index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/unsemantic-grid-responsive-tablet.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <title>Index</title>
</head>
<body>

<header>
    <img src="assets/images/logo.png" width="100px" class="TextWrap">
    <p id="BoldTitle">BugTracker</p>
    <p id="NormalTitle">Keeping Track of all the pesky little bugs</p>

</header>

<nav>
</nav>


<main>

    <section class="grid-25 tablet-grid-33 mobile-grid-100" id="Sidebar">

        <ul>
            <li>
                <a href="showbugs.php">All Bugs</a>
            </li>
            <li>
                <a href="bugs.html">Android Bugs</a>
            </li>
            <li>
                <a href="bugs.html">iOS Bugs</a>
            </li>
            <li>
                <a href="bugs.html">Windows Bugs</a>
            </li>
            <li>
                <a href="addbugs.php">Insert Bug</a>
            </li>
        </ul>

    </section>

    <section class="grid-75 tablet-grid-66 mobile-grid-100" id="MainSection">
        <form action="addbugs.php" method="POST">
            <table>
                <tr>
                    <td>
                        Bug Name:
                    </td>
                    <td>
                        <input type="text" name="bugname" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bug Summary:
                    </td>
                    <td>
                        <textarea name="bugsummary" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bug Category:
                    </td>
                    <td>
                        <select name="bugcategory" required>
                            <option value="Android">Android</option>
                            <option value="iOS">iOS</option>
                            <option value="Windows">Windows</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </section>




</main>

<footer>
    <p>Designed by Christophe Meyers, 2016.</p>
</footer>

</body>
</html>