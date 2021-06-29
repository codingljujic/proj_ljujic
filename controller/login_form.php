<div class="container mt-4">
<h1 class="formH1">Ulogujte se</h1>
    <form action="/PHP_Boot/proj_ljujic/controller/login_request.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Mail adresa</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Upišite mail" name="mail">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Šifra</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Upišite šifru" name="sifra">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Uloguj se</button>
    </form>
</div>