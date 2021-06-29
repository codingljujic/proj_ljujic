<div class="container mt-4">
    <h1 class="formH1">Kontakt forma</h1>
    <span id="message"> </span>
    <form id="form" onsubmit= "return save_data()" method="GET">
        <div class = "row">
            <div class="col">
                <label for="ime" class="form-label">Ime</label>
                <input type="text" class="form-control form_data" id="exampleInputtext1" name= "ime">
            </div>
            <div class="col">
                <label for="prezime" class="form-label" >Prezime</label>
                <input type="text" class="form-control form_data" id="exampleInputtext1" name= "prezime">
            </div>
        </div>
        <div class="col">
            <label for="mail" class="form-label">Vaša mejl adresa</label>
            <input type="email" class="form-control form_data" id="exampleInputEmail1" aria-describedby="emailHelp" name= "mail">
        </div>
        <div class="mb-4 height_mm">
            <label for="poruka" class="form-label formMessageLast" >Vaša poruka</label>
            <input type="message" class="form-control form_data" id="exampleInputtext1" name= "poruka">
        </div>
        <button type="submit" class="btn btn-primary" onclick="save_data();return false;">Pošaljite poruku</button>
    </form>
</div>
<script src="/PHP_boot/proj_ljujic/controller/send_form.js">

</script>