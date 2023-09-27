


<!-- Modal edit -->
<div class="modal fade" id="edit{{$contacto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR CONTACTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home.update', $contacto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="" class="form-control" value="{{$contacto->nombre}}">

                    <label for="">Telefono</label>
                    <input type="text" name="telefono" id="" class="form-control" value="{{$contacto->telefono}}">

                    <label for="">Direccion</label>
                    <input type="text" name="direccion" id="" class="form-control" value="{{$contacto->direccion}}">

                    <label for="">Imagen</label>
                    <input type='file' name="imagen" id="" class="form-control" value="{{$contacto->direccion}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
        </div>
        </form>
    </div>
</div>





<!-- Modal delete -->
<div class="modal fade" id="delete{{$contacto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ELIMINAR CONTACTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('home.destroy',$contacto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar a <strong>{{$contacto->nombre}}</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
        </div>
        </form>
    </div>
</div>

