<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/ajouter" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Club</td>
                <td><input type="text" name="club"></td>
            </tr>
            <tr>
                <td>Value</td>
                <td><input type="text" name="value"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="ajouter"></td>
            </tr>
        </table>
        @csrf
    </form>
</body>
</html>