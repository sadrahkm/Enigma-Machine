<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Enigma Machine</title>
    <script type="application/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <script src="js/main.js" type="application/javascript"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="top_keyboard">
            <span name="q">q</span>
            <span name="w">w</span>
            <span name="e">e</span>
            <span name="r">r</span>
            <span name="t">t</span>
            <span name="z">z</span>
            <span name="u">u</span>
            <span name="i">i</span>
            <span name="o">o</span>
            <br>
            <span name="a">a</span>
            <span name="s">s</span>
            <span name="d">d</span>
            <span name="f">f</span>
            <span name="g">g</span>
            <span name="h">h</span>
            <span name="j">j</span>
            <span name="k">k</span>
            <br>
            <span name="p">p</span>
            <span name="y">y</span>
            <span name="x">x</span>
            <span name="c">c</span>
            <span name="v">v</span>
            <span name="b">b</span>
            <span name="n">n</span>
            <span name="m">m</span>
            <span name="l">l</span>
        </div>
    </div>
</div>

<form action="" id="enigma">
    <input type="text" name="plain" id="plain">
</form>

<div class="container">
    <div class="row">
        <div class="plugboard">
            <p data-value="q">q<span class="plug"></span></p>
            <p data-value="w">w<span class="plug"></span></p>
            <p data-value="e">e<span class="plug"></span></p>
            <p data-value="r">r<span class="plug"></span></p>
            <p data-value="t">t<span class="plug"></span></p>
            <p data-value="z">z<span class="plug"></span></p>
            <p data-value="u">u<span class="plug"></span></p>
            <p data-value="i">i<span class="plug"></span></p>
            <p data-value="o">o<span class="plug"></span></p>
            <br>
            <p data-value="a">a<span class="plug"></span></p>
            <p data-value="s">s<span class="plug"></span></p>
            <p data-value="d">d<span class="plug"></span></p>
            <p data-value="f">f<span class="plug"></span></p>
            <p data-value="g">g<span class="plug"></span></p>
            <p data-value="h">h<span class="plug"></span></p>
            <p data-value="j">j<span class="plug"></span></p>
            <p data-value="k">k<span class="plug"></span></p>
            <br>
            <p data-value="p">p<span class="plug"></span></p>
            <p data-value="y">y<span class="plug"></span></p>
            <p data-value="x">x<span class="plug"></span></p>
            <p data-value="c">c<span class="plug"></span></p>
            <p data-value="v">v<span class="plug"></span></p>
            <p data-value="b">b<span class="plug"></span></p>
            <p data-value="n">n<span class="plug"></span></p>
            <p data-value="m">m<span class="plug"></span></p>
            <p data-value="l">l<span class="plug"></span></p>
        </div>
    </div>
</div>
</body>
</html>