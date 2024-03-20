<form action="/dashboard/users/add" method="post">
            <label for="userEmail">Email</label>
            <input type="email" name="userEmail">
            <label for="userPasswor">Password</label>
            <input type="password" name="userPassword">
            <label for="userName">Nome</label>
            <input type="text" name="userName">
            <label for="userSurname">Cognome</label>
            <input type="text" name="userSurname">
            <label for="category">Categoria</label>
            <select name="category">
                <option value="cliente">Cliente</option>
                <option value="studente">Studente</option>
                <option value="diversamente_abile">Esigenze Speciali</option>
            </select>
            <input type="submit">
        </form>