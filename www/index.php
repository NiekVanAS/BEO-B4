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
        <div class="container">
            <div class="colum">
                <div class="form-group">
                    <label for="name">voornaam</label>
                    <input type="text" name="name" id="name" autofocus placeholder="voornaam">
                </div>
                <div class="form-group">
                    <label for="achter">Achternaam</label>
                    <input type="text" name="achter" id="achter" placeholder="tussenvoegsel">
                </div>
                <div class="form-group">
                    <label for="tusen">tussenvoegsel</label>
                    <input type="text" name="tussen" id="tusen" placeholder="achernaam">
                </div>
            </div>

            <div class="colum">
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
            </div>

            <div class="colum">
                <div class="form-group">
                    <div class="flex">
                        <p>wilt u updates van onze nieuwsbreif krijgen</p>
                        <label for="yah">Ja</label>
                        <input type="radio" name="news" id="yah">
                        <label for="nah">Nee</label>
                        <input type="radio" name="news" id="nah">
                    </div>
                    <div class="flex">
                        <p>check</p>
                        <label for="">Sport</label>
                        <input type="checkbox" name="" id="">
                        <label for="">Gamen</label>
                        <input type="checkbox" name="" id="">
                        <label for="">vissen</label>
                        <input type="checkbox" name="" id="">
                        <label for=""></label>
                        <input type="checkbox" name="" id="">
                        <label for="">1</label>
                        <input type="checkbox" name="" id="">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit">Sla op</button>
    </form>
</body>

</html>