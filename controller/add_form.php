<div class="container mt-4">
    <h1 class="formH1">Upišite podatke</h1>
    <form action="/PHP_Boot/proj_ljujic/controller/add_request.php" method="POST">
        <div class="form-group" style=" display:inline-block;">
            <label for="exampleInputEmail1">Ime:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ime">
        </div>
        <div class="form-group" style=" display:inline-block;">
            <label for="exampleInputEmail1">Devojačko prezime:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="devojacko">
        </div>
        <div class="form-group" style=" display:inline-block;">
            <label for="exampleInputEmail1">Datum Rođenja:</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="datum">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mesto rođenja:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="mesto">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Zanimanje:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="zanimanje">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">O osobi:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Upišite šifru" name="o_osobi">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Dodajte osobu</button>
    </form>
</div>