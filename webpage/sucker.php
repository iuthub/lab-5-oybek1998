<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Buy Your Way to a Better Education!</title>
        <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <?php
             $name = $_POST["name"];
             $section = $_POST["section"];
             $card = $_POST["card"];
             $visa = (isset($_POST['visa']) ? $_POST['visa'] : '');
                if(empty($name) || empty($section) || empty($card) || empty($visa)){ ?>
            <h1>Sorry</h1>
     <p>You didn`t fill out the form completely <a href="buyagrade.html">Try again?</a></p>
     <?php } else {?>

        <h1>Thanks, sucker!</h1>
        <p>
            Your information has been recorded.
        </p>

            <dl>
                <dt>Name</dt>
                <dd>
                    <?= $_POST["name"] ?>
                </dd>

                <dt>Section</dt>
                <dd>
                    <?= $_POST["section"] ?>
                </dd>

                <dt>Credit Card</dt>
                <dd>
                    <?= $_POST["card"] ?>
                    <?= $_POST["visa"] ?>
                </dd>
            </dl>
        <p>Here are all the suckers who have submitted here:</p>
        <?php
            $file = 'sucker.txt';
            $name = $_POST["name"].";";
            $section = $_POST["section"].";";
            $card = $_POST["card"].";";
            $visa = $_POST["visa"]."\n";
            file_put_contents($file, $name, FILE_APPEND);
            file_put_contents($file, $section, FILE_APPEND);
            file_put_contents($file, $card, FILE_APPEND);
            file_put_contents($file, $visa, FILE_APPEND);
            $getcontents = file_get_contents($file);
        ?>
        <pre><?=$getcontents ?></pre>
<?php } ?>

    </body>
</html>
