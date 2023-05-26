<?php
    require "php/element_input.php";
    require "php/element_select.php";
    require "php/element_a.php";
    require "php/element_img.php";
    require "php/element_div.php";
    require "php/element_form.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>HTML Library Example</title>

    <style>
        input, select {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }
    </style>

</head>
<body>
    <?php
        $form = new Form("get", "#");
        $form->class = "container-sm w-25 d-flex flex-column";

        $email = new Input("email");
        $email->class = "form-control";
        $email->placeholder = "Email address (example@domain.com)";

        $password = new Input("password");
        $password->class = "form-control";
        $password->placeholder = "Password";

        $optionMale = new Option("m", "Male");
        $optionFemale = new Option("f", "Female");
        $optionOther = new Option("o", "Other");

        $gender = new Select();
        $gender->class = "form-select";
        $gender->options[] = $optionMale;
        $gender->options[] = $optionFemale;
        $gender->options[] = $optionOther;

        $submit = new Input("submit");
        $submit->value = "Odeslat formulář";
        $submit->class = "btn btn-primary";

        $tos = new A("https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUXbmV2ZXIgZ29ubmEgZ2l2ZSB5b3UgdXA%3D", "Terms of Services");

        $form->content =
            "<h1>Příklad registračního formuláře</h1>".
            $email->build().
            $password->build().
            $gender->build().
            $tos->build().
            $submit->build();
        $form->render();

        $img= new Img("https://www.olc.cz/wp-content/themes/olc-2019/images/olc_logo.svg", "olc_systems");
        $img->class = "container-sm d-flex my-3";
        $img->width = 266;
        $img->height = 111;
        $img->render();
    ?>
</body>
</html>

<?php

