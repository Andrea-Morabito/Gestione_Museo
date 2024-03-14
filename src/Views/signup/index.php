<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <form action="/signup/create" method="post">
            <label for="userEmail">Email</label>
            <input type="text" name="userEmail">
            <label for="userPasswor">Password</label>
            <input type="text" name="userPassword">
            <label for="userName">Nome</label>
            <input type="text" name="userName">
            <label for="userSurname">Cognome</label>
            <input type="text" name="userSurname">
            <label for="category">Categoria</label>
            <select name="category">
                <option value="client">Cliente</option>
                <option value="school">Scuola</option>
                <option value="student">Studente</option>
                <option value="special_care">Esigenze Speciali</option>
            </select>
            <input type="submit">
        </form>
    </div>
</body>
</html>