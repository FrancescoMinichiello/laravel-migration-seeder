@extends('layouts.app')

@section('main-content')
    <div class="container-fluid py-5">
        <div class="row">
            <h2>Data e ora odierna: <span class="text-success">{{ now('+2:00') }}</span></h2>
            <div class="col">
                <div class="col">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">azienda</th>
                                <th scope="col">Data di partenza</th>
                                <th scope="col">Stazione di partenza</th>
                                <th scope="col">Stazione di arrivo</th>
                                <th scope="col">Orario di partenza</th>
                                <th scope="col">Orario di arrivo</th>
                                <th scope="col">Codice treno</th>
                                <th scope="col">Numero di carrozze</th>
                                <th scope="col">In orario</th>
                                <th scope="col">Cancellato</th>

                            </tr>
                        </thead>
                        @forelse ($trains as $train)
                            <tbody>
                                <tr>
                                    <th scope="row">{{ $train->azienda }}</th>
                                    <th scope="row">{{ $train->data_di_partenza }}</th>
                                    <td>{{ $train->stazione_partenza }}</td>
                                    <td>{{ $train->stazione_arrivo }}</td>
                                    <td>{{ $train->orario_partenza }}</td>
                                    <td>{{ $train->orario_arrivo }}</td>
                                    <td>{{ $train->codice_treno }}</td>
                                    <td>{{ $train->numero_carrozze }}</td>
                                    <td>{{ $train->in_orario ? 'Si' : 'No' }}</td>
                                    <td>{{ $train->cancellato ? 'Si' : 'No' }}</td>
                                </tr>
                            </tbody>
                        @empty
                            <tr>
                                <td class="text-danger">No trains available.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/">
                    <h5>Torna indietro</h5>
                </a>
            </div>
        </div>
    </div>
@endsection
