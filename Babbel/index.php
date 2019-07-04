<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>

    <!--HEADER-->
    <nav>
        <div id="AlertDiv">
            <h1>Babbel</h1>
        </div>

    <div class="grid-container" style='grid-template-areas:
        ". . a . ."
        ;'>
        <!-- New user -->
        <div class="a">
            <h4>Gebruiker aanmaken</h4>

            <table id="gebruiker_toevoegen">
                <tr>
                    <th>Naam:</th>
                    <th><input type="text" placeholder="Naam" style="text-align: center;"></th>

                </tr>


                <tr>
                    <th>E-mail:</th>
                    <th><input type="text" placeholder="E-mail" style="text-align: center;"></th>


                </tr>

                <tr>
                    <th>Password</th>
                    <th><input type="text" placeholder="Password" style="text-align: center;"></th>


                </tr>

            </table>

            <div id="button"><a href="gebruikers.php">Maak Gebruiker aan</a></div>

        </div>

    </div>

</body>

</html>
