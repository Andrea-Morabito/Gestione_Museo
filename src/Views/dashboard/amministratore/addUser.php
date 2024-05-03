<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo '/ProgettoVenereUDA' . '/' . STYLE_PATH . '/style.css'?>">
<body>
<div style= "margin-top: 5em">
    <form action="/dashboard/users/add" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="userEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail">
        </div>
        <div class="col-md-6">
            <label for="userPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="userPassword" name="userPassword">
        </div>
        <div class="col-md-6">
            <label for="userName" class="form-label">Nome</label>
            <input type="text" class="form-control" id="userName" name="userName">
        </div>
        <div class="col-md-6">
            <label for="userSurname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="userSurname" name="userSurname">
        </div>
        <div class="col-md-6">
            <label for="category" class="form-label">Categoria</label>
            <select class="form-select" id="category" name="category">
                <option value="cliente">Cliente</option>
                <option value="studente">Studente</option>
                <option value="diversamente_abile">Esigenze Speciali</option>
            </select>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Invia</button>
        </div>
    </form>
</div>
</body>