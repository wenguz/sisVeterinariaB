@extends('layouts.administrador')
@section('contenido')
<section id="main-content">
    <section class="wrapper">
        <h3>
            <i class="fa fa-angle-right">
            </i>
            Personal
        </h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4>
                        <i class="fa fa-angle-right">
                        </i>
                        Editar: {{$personal->nombre}}
                    </h4>
                    @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
      {!!Form::model($personal,['method'=>'PATCH','route'=>['personal.update', $personal->idpersonal]])!!}
            {{Form::token()}}
                    <section class="panel" id="no-more-tables">
                        <table width="100%">
                            <tr>
                                <td>
                                </td>
                                <td colspan="2" width="33%">
                                    <br>
                                        <h4>
                                            <center>
                                                DATOS PERSONALES
                                            </center>
                                        </h4>
                                    </br>
                                </td>
                                <td width="33%">
                                    <br>
                                        <h4>
                                            <center>
                                                DATOS PARA USUARIO
                                            </center>
                                        </h4>
                                    </br>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                NOMBRE:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="nombre" type="text" value="{{$personal->nombre}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                CI:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="ci" type="text" value="{{$personal->ci}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                USUARIO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="usuario" type="text" value="{{$usu->usuario}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                AP. PATERNO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="ap_paterno" type="text" value="{{$personal->ap_paterno}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                TELEFONO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="telf" type="text" value="{{$personal->telf}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                PASSWORD:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="pass" type="text" value="{{$usu->pass}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                AP. MATERNO:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="ap_materno" type="text" value="{{$personal->ap_materno}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                DIRECCION:
                                            </label>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="direccion" type="text" value="{{$personal->direccion}}">
                                                </input>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="33%">
                                    <div class="form-group">
                                        <br>
                                            <label class="col-sm-4 col-sm-4 control-label">
                                                CARGO:
                                            </label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="cargo">
                                                    @foreach ($tipos as $t)
                                    @if ($usu->idtipo == $t->idtipo )
                                                    <option selected="" value="{{$t->idtipo}}">
                                                        {{$t->cargo}}
                                                    </option>
                                                    @else
                                                    <option value="{{$t->idtipo}}">
                                                        {{$t->cargo}}
                                                    </option>
                                                    @endif
                                  @endforeach
                                                </select>
                                            </div>
                                        </br>
                                    </div>
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td width="33%">
                                </td>
                                <td width="33%">
                                    <center>
                                        <div class="form-group">
                                            <br>
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary" type="submit">
                                                        Guardar
                                                    </button>
                                                    <a class="btn btn-danger" href="{{url()->previous()}}" type="reset">
                                                        Cancelar
                                                    </a>
                                                </div>
                                            </br>
                                        </div>
                                    </center>
                                </td>
                                <td width="33%">
                                </td>
                                <td width="8%">
                                </td>
                            </tr>
                        </table>
                    </section>
                    {!!Form::close()!!}
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection
