<?php include 'head.php'?>
<div class="container">
    <div class="row">
        <h3>Fuiste invitado a la red de investigacion "nombreRed" por "nombrePropietario"</h3>
        <p>Para aceptar la invitación llena los siguientes datos:</p>
    </div>
    <form>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo institucional</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
        <small id="emailHelp" class="form-text text-muted">Para registrar una red debes pertenecer al Tecnológico Nacional de Mexico.</small>
    </div>

    <div class="row">
        <div class="col">
            <label for="name">Nombre</label>
            <input id="name" type="text" class="form-control" placeholder="Nombre">
        </div>
        <div class="col">
            <label for="lastName">Apellido</label>
            <input id="lastName" type="text" class="form-control" placeholder="Apellidos">
        </div>
    </div>
    <div class="form-group">
        <label for="data">Dato </label>
        <input id="data" placeholder="Dato" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Constraseña">
    </div>
    <div class="form-group">
        <label for="Estado">Estado</label>
        <select class="form-control" aria-label="Estado">
            <option selected>Selecciona tu estado</option>
            <option value="1">Ciudad de Mexico</option>
            <option value="2">Michoacan</option>
            <option value="3">Jalisco</option>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <br>
    <br>
    </form>
</div>
<?php include 'footer.php'?>