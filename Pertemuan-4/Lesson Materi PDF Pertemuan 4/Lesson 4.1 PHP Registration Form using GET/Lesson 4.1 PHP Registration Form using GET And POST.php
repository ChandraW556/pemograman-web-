<html>

<head>
    <title>Registration Form Menggunaka PHP Post Dan GET</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>

    <h2>Registration Form</h2>

    <form action="registration_form.php" method="POST"> First name:

        <input type="text" name="firstname"> <br> Last name:

        <input type="text" name="lastname">

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit">


        <?php if (isset($_GET['form_submitted'])) : ?>

            <h2>Search Results For <?php echo $_GET['search_term']; ?> </h2>
            <?php if ($_GET['search_term'] == "GET") : ?>

                <p>The GET method displays its values in the URL</p>

            <?php else : ?>
                <p>Sorry, no matches found for your search term</p>

            <?php endif; ?>

            <p>Go <a href="/search_engine.php">back</a> to the form</p>

        <?php else : ?>

            <h2>Simple Search Engine - Type in GET </h2>

            <form action="search_engine.php" method="GET">

                Search Term:
                <input type="text" name="search_term">
                <br>

                <input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit">

            </form>
        <?php endif; ?>

        <?php if (isset($_POST['form_submitted'])) : ?>

            <?php if (!isset($_POST['agree'])) : ?>

                <p>You have not accepted our terms of service</p>

            <?php else : ?>

                <h2>Thank You <?php echo $_POST['firstname']; ?></h2>

                <p>You have been registered as
                    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                </p>

                <p> Go <a href="/registration_form2.php">back</a> to the form</p>

            <?php endif; ?>

        <?php else : ?>

            <h2>Registration Form</h2>

            <form action="registration_form2.php" method="POST">

                First name:
                <input type="text" name="firstname">

                <br> Last name:
                <input type="text" name="lastname">

                <br> Agree to Terms of Service:
                <input type="checkbox" name="agree">
                <br>

                <input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="Submit">

            </form>
        <?php endif; ?>



    </form>
</body>

</html>