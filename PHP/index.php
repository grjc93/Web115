<!DOCTYPE html>
<html>
<head>
    <title>PHP include</title>
    <style>
        body{
            background-color:darkblue;
        }
        #container{
            width:960px;
            min-height: 600px;
            background: aliceblue;
            color:darkblue;
            font-family:inherit;
            font-size: 20px;
        }
        main{
            min-height: 500px;
        }
        footer {
            min-height: 50px;
        }
    </style></head>
<body>
    <div id="container">
    <h1> Rosemary Edwards</h1>
        <main>
        </main>
        <footer>
        <?php include 'footer.php';?>
        </footer>
    </div>
    </body>

    







</html>