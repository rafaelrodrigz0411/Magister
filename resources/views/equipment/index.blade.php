@extends('layouts.app')

@section('template_title')
    Equipo de desarrollo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Equipo de desarrollo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('equipment.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre de la persona encargada</th>
										<th>Área de desarrollo</th>
										<th>Id Edificio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipment as $equipment)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $equipment->name_of_person_in_charge }}</td>
											<td>{{ $equipment->development_area }}</td>
											<td>{{ $equipment->id_buldings }}</td>

                                            <td>
                                                <form action="{{ route('equipment.destroy',$equipment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('equipment.show',$equipment->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('equipment.edit',$equipment->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $equipment->links() !!}
            </div>
        </div>
    </div>
@endsection
