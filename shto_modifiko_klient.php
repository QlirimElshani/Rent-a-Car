<?php include_once('includes/sqlFunctions.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Rent a car</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />
    <script src="https://use.fontawesome.com/3ca95fdef9.js"></script>
    <style>
        #shtoForma {
            width: 90%;
            margin: 50px 40px;
        }

        #hi {
            color: #009933;
            padding: 20px 0px 10px 10px;
            margin: 0px 15px;
            font-size: 25px;
            border-bottom: 2px solid #009933;
        }

        label,
        input {
            width: 100%;
            padding: 10px;
        }

        label {
            color: #009933;
            font-weight: bold;
            margin-left: -10px;
        }

        input {
            outline: none;
            margin: 10px 0px;
        }

        input[type='submit'] {
            width: 150px;
            float: right;
            margin: 30px 0px;
            margin-right: -25px;
            color: #fff;
            background-color: #009933;
            border: none;
        }

        input[type='submit']:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['shtoKlient'])) {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $telefoni = $_POST['telefoni'];
        $nr_personal = $_POST['nr_personal'];
        $adresa = $_POST['adresa'];
        shtoKlient($emri, $mbiemri, $email, $telefoni, $nr_personal, $adresa);
    }

    if(isset($_GET['klientiid'])){
        $klienti = mysqli_fetch_assoc(merrKlientinId($_GET['klientiid']));
    }

    if(isset($_POST['modifikoKlient'])){
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $telefoni = $_POST['telefoni'];
        $nr_personal = $_POST['nr_personal'];
        $adresa = $_POST['adresa'];
        modifikoKlient($_GET['klientiid'], $emri, $mbiemri, $email, $telefoni, $nr_personal, $adresa);
    }

    ?>
    <div class="container">
        <div id="header">
            <div id="logo">
                <img src="images/logo.png" alt="Logo" width="100" height="50">
            </div>
            <div id="menu">
                <ul>
                    <li><a href="index.html" class="active">Ballina</a></li>
                    <li><a href="klientet.html">Klientet</a></li>
                    <li><a href="automjetet.html">Automjetet</a></li>
                    <li><a href="rezervimet.html">Rezervimet</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="logout.html">Logout</a></li>
                </ul>
            </div>
            <p style="color: #009933;float:right;margin-right:50px;margin-top:40px"></p>
            <div style="clear: both;"></div>
        </div>
        <div id="main">
            <div id="slide-bar">
                <div class="image">
                    <?php if (isset($_GET['klientiid'])) : ?>
                        <h1>Modifikimi i klientit</h1>
                    <?php else : ?>
                        <h1>Shtimi i klientit</h1>
                    <?php endif ?>
                </div>
            </div>
            <?php if (isset($_GET['klientiid'])) : ?>
                <h1 id="hi">Forma per modifikimin e klientit</h1>
            <?php else : ?>
                <h1 id="hi">Forma per shtimin e klientit</h1>
            <?php endif ?>
            <form method="post" id="shtoForma">
                <label for="emri">Emri</label>
                <input type="text" name="emri" value="<?php if(isset($_GET['klientiid'])) : echo $klienti['emri']; endif ?>">
                <label for="mbiemri">Mbiemri</label>
                <input type="text" name="mbiemri" value="<?php if(isset($_GET['klientiid'])) : echo $klienti['mbiemri']; endif ?>">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php if(isset($_GET['klientiid'])) : echo $klienti['email']; endif ?>">
                <label for="telefoni">Telefoni</label>
                <input type="text" name="telefoni" value="<?php if(isset($_GET['klientiid'])) : echo $klienti['telefoni']; endif ?>">
                <label for="nr_personal">Numri Personal</label>
                <input type="text" name="nr_personal" value="<?php if(isset($_GET['klientiid'])) : echo $klienti['nr_personal']; endif ?>">
                <label for="adresa">Adresa</label>
                <input type="text" name="adresa" value="<?php if(isset($_GET['klientiid'])) : echo $klienti['adresa']; endif ?>">
                <?php if(isset($_GET['klientiid'])) : ?>
                    <input type="submit" name="modifikoKlient" value="Modifiko klient">
                <?php else : ?>
                    <input type="submit" name="shtoKlient" value="Shto klient">
                <?php endif ?>
            </form>
            <div style="clear: both;"></div>
        </div>
        <hr>
        <div id="footer">
            <p>&copy; Rent a Car 2020. All rights reserved.</p>
            <ul>
                <li><a href="#"><img src="images/insta.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="images/facebook.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="images/snap.png" alt="Snapchat"></a></li>
            </ul>
        </div>
    </div>
</body>

</html>
