@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h2 class="card-title mt-3">KMI Skaičiuoklė</h2>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row gutters-20 kmi-test-form m-3">
                    <form  method="post" action="{{route("rezultatas")}}" class="col-lg-12 gutters-20  ">
                      @csrf
                        <div  class="form-row row">
                            <div class="col-md-6" >
                                <label for="" class="mb-1">Jūsų ūgis (metrais, pvz.: 168):</label>
                                <input type="text"  id="ugis" name="ugis" aria-required="true" class="form-control error">
                            </div>
                            <div class="col-md-6 ">
                                <label for="svoris" class="mb-1">Jūsų svoris (kilogramais, pvz.: 50):</label>
                                <input type="text"  id="svoris" name="svoris" aria-required="true"  class="form-control ">

                            </div>
                        </div>
                        <div class="button d-flex justify-content-center gap-2">

                            <button  type="submit" class="btn btn-primary btn-block radius mt-3 gap-2">Skaičiuoti kūnos masės indeksą</button>

                            <button type="reset" class="btn btn-primary btn-block radius mt-3">Trinti</button>
                        </div>
                    </form>
                    <!--                <a href="rezultatas.php?x=2$y=2">koks</a>-->

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

