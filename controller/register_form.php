<div class="container mt-4">
    <h1 class="formH1">Registrujte se</h1>
    <small style="font-style:italic;">Ukoliko već imate nalog ulogujte se. <a href ='login.php'>Login</a></small>
    <span id="message"> </span>
    <form id="form" action="/PHP_Boot/proj_ljujic/controller/register_request.php" method="POST">
        <div class="col">
            <label for="ime" class="form-label">Ime</label>
            <input type="text" class="form-control form_data" id="exampleInputtext1" name= "ime">
        </div>
        <div class="col">
            <label for="prezime" class="form-label" >Prezime</label>
            <input type="text" class="form-control form_data" id="exampleInputtext1" name= "prezime">
        </div>
        <div class="col">
            <label for="mail" class="form-label">Vaša mail adresa</label>
            <input type="email" class="form-control form_data" id="exampleInputEmail1" aria-describedby="emailHelp" name= "mail" placeholder="Upišite mail">
        </div>
        <div class="mb-2">
            <label for="poruka" class="form-label formMessageLast" >Šifra</label>
            <input type="password" class="form-control form_data" id="exampleInputtext1" name= "sifra" placeholder="Upišite šifru">
        </div>
        <button type="submit" class="btn btn-primary">Napravite nalog</button>
    </form>
</div>