<div class="container mt-4">
<h1 class="formH1">Улогујте се </h1>
    <form action="/PHP_Boot/proj_ljujic/controller/login_request.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Мејл адреса</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Упишите мејл" name="mail">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Шифра</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Упишите шифру" name="sifra">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Улогуј се</button>
    </form>
</div>