<div class="box box-primary">

<div class="box-header">
                  <h3 class="box-title">Usuarios Encontrados</h3>
                </div>

<div class="box-body">              

@if(count($usuarios) > 0)
<table id="tabla_usuarios" class="display table table-hover" cellspacing="0" width="100%"> 
    <thead>
        <tr>
         <th style="width:10px">Id</th>
            <th>Nombres</th>
            <th>email</th>
            <th>ciudad</th>
            <th>instituccion</th>
            <th>ocupacion</th>
            <th>Fecha Creado</th>
         
          <th>Acción</th>
        </tr>
    </thead>     
    <tbody>



@foreach($usuarios as $usuario)
    <tr role="row" class="odd">
        <td class="sorting_1">{{$usuario->id}}</td>
        <td class="mailbox-messages mailbox-name" ><a href="javascript:void(0);" onclick="mostrarficha({{$usuario->id}})"  style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$usuario->nombres." ".$usuario->apellidos}}</a></td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->ciudad}}</td>
        <td>{{$usuario->institucion}}</td>
        <td>{{$usuario->ocupacion}}</td>
        <td>{{$usuario->created_at}}</td>
        <td><button class="btn  btn-skin-green btn-xs" onclick="mostrarficha({{$usuario->id}});" ><i class="fa fa-fw fa-eye"></i>Ver</button></td>
    </tr>
@endforeach

</table>


{!! str_replace('/?', '?', $usuarios->render() ) !!}

@else




<br/><div class='rechazado'><label style='color:#FA206A'>...No se ha encontrado ningun usuario...</label>  </div> 

@endif
</div>



