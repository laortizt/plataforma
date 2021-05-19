<div class="mb-3">
    <label for="name" class="form-label">Nombre Completo</label>
    <input type="text" name="name" id="name" class="form-control" value="{{isset($profesional->name)?$profesional->name:''}}">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" name="email" id="email" class="form-control" value="{{isset($profesional->email)?$profesional->email:''}}" >
</div>
<div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" name="password" id="password" class="form-contol" value="{{isset($profesional->password)?$profesional->password:''}}" >
</div>
<div class="mb-3">
    <label for="telephone" class="form-label">Telefono</label>
    <input type="text" name="telephone" id="telephone" class="form-contol" value="{{isset($profesional->telephone)?$profesional->telephone:''}}">
</div>
<div class="mb-3">
    <label for="city" class="form-label">Pais</label>
    <input type="text" name="country" id="country" class="form-control" value="{{isset($profesional->country)?$profesional->country:''}}">
    <!-- <input type="select" name="city" id="city" class="form-select"> -->
    <!-- <select class="mb-3" id="city" name="city" class="form-select w-100" class="form-contol" aria-label="Default select example ">
                        <option class="mb-3" selected>Seleccione una ciudad</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select> -->
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