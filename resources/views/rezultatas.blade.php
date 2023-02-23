@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card" class="p-3">
                    <h1 class="p-3">Jūsų KMI indeksas:  {{ $kmi}} </h1>
                    <h2 class="p-3 text-bg-primary" >{{ $output}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
