@extends('layouts.app')

@section('content')

	<div class="row">
        <div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Usuarios existentes</h3>
					<div class="box-tools">
						<form action="" method="get">
							<div class="input-group input-group-sm" style="width: 150px;">							
								<input name="search" class="form-control pull-right" placeholder="Buscar" type="text">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Email</th>
								<th>Status</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($users) && !empty($users))
								
								@foreach($users as $u)
									
									<tr>
										<td>{{ $u->id }}</td>
										<td>{{ $u->name }}</td>
										<td>{{ $u->email }}</td>
										<td>
											@if($u->status == 1) 
												<span class="fa fa-check"> Activo</span>
											@else 
												<span class="fa fa-close"> Inactivo</span>
											@endif
										</td>
										<td class="text-center">
											<a title="Editar" href="{{ url('users/form')}}/{{$u->id}}" class="btn btn-default btn-xs">
												<i class="fa fa-pencil"></i>
											</a>
											<a title="{{{$u->status == 1?'Desactivar':'Activar'}}}" 
												href="{{ url('users/changeStatus')}}/{{$u->id}}" class="btn btn-default btn-xs">
												<i class="fa {{{$u->status == 1?'fa-close':'fa-check'}}}"></i>
											</a>
										</td>
									</tr>
									
								@endforeach

							@else
								<tr>
									<td colspan="10">
										<div class="callout callout-warning">
											<h4>No se han encontrado registros</h4>
										</div>
									</td>
								</tr>
							@endif
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
    </div>

@endsection