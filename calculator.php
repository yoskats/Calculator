<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>calculator task</title>
</head>

<body class="bg-secondary">
    <div class="container mt-5">
        <div class="row mt-5 d-flex flex-column">
            <div class="my-5 py-5 mx-auto bg-warning text-center">
                <h1>calculator task</h1>
            </div>
            <form class="col-sm-10 col-md-10 col-lg-8 col-xl-6 mx-auto text-center mt-5" action="/calculator.php" method="GET">
                <input class="w-100 mt-2" type="number" name="num1" placeholder="0">
                <input class="w-100 mt-2" type="number" name="num2" placeholder="0">
                <select class="w-100 mt-2" name="operate">
                    <option value="None">None</option>
                    <option value="Plus">Plus</option>
                    <option value="Minus">Minus</option>
                    <option value="Multiply">Multiply</option>
                    <option value="Divide">Divide</option>
                </select>
                <button class="btn btn-danger col-3  mt-2" name="submit" value="submit" type="submit">calculate</button>
            </form>
            <div class="col-6 mx-auto mt-5 border border-top-warning">
                <p class="text-center text-light">The answer is:
                    <?php
                    if (isset($_GET['submit'])) {
                        $number1 = $_GET['num1'];
                        $number2 = $_GET['num2'];
                        $operator = $_GET['operate'];
                        switch ($operator) {
                            case "None":
                                echo "Error, you need to select an operator";
                                break;
                            case "Plus":
                                echo $number1 + $number2;
                                break;
                            case "Minus":
                                echo $number1 - $number2;
                                break;
                            case "Multiply":
                                echo $number1 * $number2;
                                break;
                            case "Divide":
                                echo $number1 / $number2;
                                break;
                        }
                    }

                    ?></p>
            </div>
        </div>
    </div>
</body>



</html>