@extends('layouts.app')

@section('content')

<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Formulario de usuarios</h3>
	</div>
	<!-- form start -->
	<form class="form-horizontal">
		<div class="box-body">
			<div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
                    <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                </div>
            </div>
        </div>

		<div class="box-footer">
			<button type="submit" class="btn btn-default">Cancel</button>
			<button type="submit" class="btn btn-info pull-right">Sign in</button>
		</div>
	</form>
</div>

@endsection