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
                        Listado del Personal
                        <a class="btn btn-success btn-xs" href="personal/create">
                            <i class="fa fa-plus">
                                Nuevo
                            </i>
                        </a>
                    </h4>
                    @include('administrador.personal.search')
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        NOMBRE
                                    </th>
                                    <th>
                                        AP. PATERNO
                                    </th>
                                    <th>
                                        AP. MATERNO
                                    </th>
                                    <th>
                                        C.I.
                                    </th>
                                    <th>
                                        TELEFONO
                                    </th>
                                    <th>
                                        DIRECCION
                                    </th>
                                    <th>
                                        CARGO
                                    </th>
                                    <th width="200px">
                                        OPCIONES
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($Personal as $p)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $p->idpersonal }}
                                    </td>
                                    <td>
                                        {{ $p->nombre }}
                                    </td>
                                    <td>
                                        {{ $p->ap_paterno }}
                                    </td>
                                    <td>
                                        {{ $p->ap_materno }}
                                    </td>
                                    <td>
                                        {{ $p->ci }}
                                    </td>
                                    <td>
                                        {{ $p->telf }}
                                    </td>
                                    <td>
                                        {{ $p->direccion }}
                                    </td>
                                    <td>
                                        {{ $p->cargo }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-xs" href="{{URL::action('PersonalController@edit',$p->idpersonal)}}" type="submit">
                                            <i class="fa fa-pencil">
                                                Editar
                                            </i>
                                        </a>
                                        <a class="btn btn-danger btn-xs" data-target="#modal-delete-{{$p->idpersonal}}" data-toggle="modal" href="">
                                            <i class="fa fa-times">
                                                Eliminar
                                            </i>
                                        </a>
                                        
                                    </td>
                                </tr>
                                @include('administrador.personal.modal')
                            </tbody>
                            @endforeach
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
                {{$Personal->render()}}
            </div>
            <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
    </section>
    <!--/wrapper -->
</section>
<!-- /MAIN CONTENT -->
@endsection
