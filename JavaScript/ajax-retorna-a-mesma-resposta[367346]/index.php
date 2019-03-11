<!DOCTYPE html>
<!-- por LipESprY -->
<html>
    <head>
        <title>Login com AJAX</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="login.js"></script>
    </head>
    <body>

        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Entrar</h1>
            <label for="name" class="sr-only">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                placeholder="Usuario...">
            <label for="word" class="sr-only">Password</label>
            <input
                type="password"
                id="word"
                name="password"
                class="form-control"
                placeholder="Senha...">
            <button
                style="margin-top: 50px;"
                id="login"
                class="btn btn-style btn-lg btn-primary btn-block">
                <strong>Logar</strong>
            </button>
            <div style="margin-top: 35px;">
                <div id="add_err" class="card"></div>
            </div>
        </form>
    </body>
</html>
