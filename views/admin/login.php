<div class="container">
    <div class="card card-login mx-auto mt-5" style='margin-botom: 10vh'>
        <div class="card-header" style='color: #111'>Вход в панель Администратора</div>
        <div class="card-body">
            <form action="/admin/login" method="post">
                <div class="form-group">
                    <label style='color: #111'>Логин</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label style='color: #111'>Пароль</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Вход</button>
            </form>
        </div>
    </div>
</div>