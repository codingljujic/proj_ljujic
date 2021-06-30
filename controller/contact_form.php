<div class="formImg">
    <div class="container mt-4">
        <h1 class="formH1">Контакт форма</h1>
        <span id="message"> </span>
        <form id="form" onsubmit= "return save_data()" method="GET">
            <div class = "row">
                <div class="col">
                    <label for="ime" class="form-label">Име</label>
                    <input type="text" class="form-control form_data" id="exampleInputtext1" name= "ime">
                </div>
                <div class="col">
                    <label for="prezime" class="form-label" >Презиме</label>
                    <input type="text" class="form-control form_data" id="exampleInputtext1" name= "prezime">
                </div>
            </div>
            <div class="col">
                <label for="mail" class="form-label">Ваша мејл адреса</label>
                <input type="email" class="form-control form_data" id="exampleInputEmail1" aria-describedby="emailHelp" name= "mail">
            </div>
            <div class="mb-2">
                <label for="exampleFormControlTextarea1">Ваша Порука</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="poruka"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" onclick="save_data();return false;">Пошаљите поруку</button>
        </form>
    </div>
</div>
<script src="/PHP_boot/proj_ljujic/controller/send_form.js">

</script>