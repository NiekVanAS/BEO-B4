<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="process_form.php" method="post">
        <div class="form-group">
            <label for="name">voornaam</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="achter">Achternaam</label>
            <input type="text" name="achter" id="achter">
        </div>
        <div class="form-group">
            <label for="tusen">tussenvoegsel</label>
            <input type="text" name="tussen" id="tusen">
        </div>
        <br>

        <div class="form-group">
            <label for="straat">straat</label>
            <input type="text" name="straat" id="straat">
        </div>
        <div class="form-group">
            <label for="huisnimmer">huisnimmer</label>
            <input type="text" name="huisnummer" id="huisnimmer">
        </div>
        <div class="form-group">
            <label for="postcode">postcode</label>
            <input type="text" name="postcode" id="postcode">
        </div>
        <div class="form-group">
            <label for="tusen">plaats</label>
            <input type="text" name="plaats" id="plaats">
        </div>
        <div class="form-group">
            <label for="land">land</label>
            <input type="text" name="land" id="land">
        </div>
        <button type="submit">Sla op</button>
    </form>
</body>

</html>