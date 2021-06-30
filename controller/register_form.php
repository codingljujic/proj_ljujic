<div class="container mt-4">
    <h1 class="formH1">Региструјте се </h1>
    <small style="font-style:italic;">Уколико већ имате налог улогујте се <a href ='login.php'>Login</a></small>
    <span id="message"> </span>
    <form id="form" action="/PHP_Boot/proj_ljujic/controller/register_request.php" method="POST">
        <div class="col">
            <label for="ime" class="form-label">Име</label>
            <input type="text" class="form-control form_data" id="exampleInputtext1" name= "ime">
        </div>
        <div class="col">
            <label for="prezime" class="form-label" >Презиме</label>
            <input type="text" class="form-control form_data" id="exampleInputtext1" name= "prezime">
        </div>
        <div class="col">
            <label for="mail" class="form-label">Ваша мејл адреса</label>
            <input type="email" class="form-control form_data" id="exampleInputEmail1" aria-describedby="emailHelp" name= "mail" placeholder="Upišite mail">
        </div>
        <div class="mb-2">
            <label for="poruka" class="form-label formMessageLast" >Шифра</label>
            <input type="password" class="form-control form_data" id="exampleInputtext1" name= "sifra" placeholder="Upišite šifru">
        </div>
        <button type="submit" class="btn btn-primary">Направите налог</button>
    </form>
</div>