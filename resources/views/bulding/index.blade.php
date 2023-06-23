@extends('layouts.app')

@section('template_title')
    Edificio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Edificio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('buldings.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>ID</th>

										<th>Número de edificio</th>
										<th>Dirección</th>
										<th>Número de teléfono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buldings as $bulding)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $bulding->branch_number }}</td>
											<td>{{ $bulding->address }}</td>
											<td>{{ $bulding->phone_number }}</td>

                                            <td>
                                                <form action="{{ route('buldings.destroy',$bulding->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('buldings.show',$bulding->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('buldings.edit',$bulding->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $buldings->links() !!}
            </div>
        </div>
    </div>
@endsection
