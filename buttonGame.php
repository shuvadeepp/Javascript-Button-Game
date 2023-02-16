<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
h2{
    text-align: center
}
.button {
  display: none;
}
</style>
  <body>
  <div class="container"><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
            <div class="column" style="background-color:#aaa;">
                <h2>Box - 1</h2>
                <button class="button" id="btn1">button - 1</button>
            </div>
            <div class="column" style="background-color:#bbb;">
                <h2>Box - 2</h2>
                <button class="button" id="btn2">button - 2</button>
            </div>
            </div>

            <div class="row">
            <div class="column" style="background-color:#ccc;">
                <h2>Box - 3</h2>
                <button class="button" id="btn3">button - 3</button>
            </div>
            <div class="column" style="background-color:#ddd;">
                <h2>Box - 4</h2>
                <button class="button" id="btn4">button - 4</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function () {
            var buttons = $(".button");
            var randIndex = Math.floor(Math.random() * buttons.length);
            buttons.eq(randIndex).show();

            var clickedButtons = 0;

            buttons.on("click", function() {
                $(this).hide();
                clickedButtons++;
                if (clickedButtons === 4) {
                    window.location.href = "https://www.google.com";
                } else {
                    randIndex = Math.floor(Math.random() * buttons.length);
                    buttons.eq(randIndex).show();
                }
            });
        });
            
    </script>
  </body>
</html>