


<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NUEVO CONTACTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="" class="form-control">

                <label for="">Telefono</label>
                <input type="text" name="telefono" id="" class="form-control">

                <label for="">Direccion</label>
                <input type="text" name="direccion" id="" class="form-control">

                <label for="">Imagen</label>
                <input type="file" name="imagen" id="" class="form-control" >
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

        </form>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3-5-1-min.js"></script>
<script>
    $ (document).ready(function (e) {
        $('#imagen').change(function (){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
