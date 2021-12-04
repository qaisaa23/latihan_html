<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML General Input</title>
</head>

<body>

    <center>
        <form action="#" method="POST">
            <p><label>Input type text : <input type="text"></label></p>
            <p><label>Input type password : <input type="password"></label></p>
            <p><label>Input type angka : <input type="number"></label></p>
            <p><label>Input type email : <input type="email"></label></p>
            <p><label>Input type telepon : <input type="tel" id="phone" name="phone" placeholder="123-456-789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required></label>
            <p>
                <input type="submit" value="Kirim">
                <input type="reset" value="Reset">
            </p>

        </form>
    </center>

</body>

</html>