@extends('layouts.app')

@section('template_title')
    Unidad de desarrollo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Unidad de desarrollo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('development-units.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Area de desarrollo</th>
										<th>Id Edificio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($developmentUnits as $developmentUnit)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $developmentUnit->name_of_person_in_charge }}</td>
											<td>{{ $developmentUnit->development_area }}</td>
											<td>{{ $developmentUnit->id_buldings }}</td>

                                            <td>
                                                <form action="{{ route('development-units.destroy',$developmentUnit->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('development-units.show',$developmentUnit->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('development-units.edit',$developmentUnit->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $developmentUnits->links() !!}
            </div>
        </div>
    </div>
@endsection
