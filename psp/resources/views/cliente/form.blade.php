<div class="mb-3">
    <label for="name" class="form-label">Nombre Completo</label>
    <input type="text" name="name" id="name" class="form-control" value="{{isset($cliente->name)?$cliente->name:''}}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" name="email" id="email" class="form-control" value="{{isset($cliente->email)?$cliente->email:''}}">
</div>
<div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" name="password" id="password" class="form-contol" value="{{isset($cliente->password)?$cliente->password:''}}">
</div>

<div class="mb-3">
    <label for="city" class="form-label">Pais</label>
    <input type="text" name="country" id="country" class="form-control" value="{{isset($cliente->country)?$cliente->country:''}}">
    
</div>
<div class="mb-3">
    <label for="photo" class="form-label">Ingrese una foto</label>
    <input type="file" name="photo" id="photo" class="form-contol" value="{{isset($cliente->photo)?$cliente->photo:''}}">
</div>

<!-- <div class="mb-3">
    <label for="accept_terms" class="form-check-label">Aceptar téminos y condiciones</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="accept_terms" name="accept_terms">
    </div>
</div> -->

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>