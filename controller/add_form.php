<div class="container mt-4">
    <h1 class="formH1">Упишите податке особе</h1>
    <form action="/PHP_Boot/proj_ljujic/controller/add_request.php" method="POST">
        <div class="form-group" style=" display:inline-block;">
            <label for="exampleInputEmail1">Име:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ime">
        </div>
        <div class="form-group" style=" display:inline-block;">
            <label for="exampleInputEmail1">Девојачко презиме:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="devojacko">
        </div>
        <div class="form-group" style=" display:inline-block;">
            <label for="exampleInputEmail1">Датум рођења:</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="datum">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Место рођења:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="mesto">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Занимање:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="zanimanje">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">О особи:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Upišite šifru" name="o_osobi">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Додајте особу</button>
    </form>
</div>
<?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'error') 
        echo "<p>Oва особа већ постоји</p>";
?>