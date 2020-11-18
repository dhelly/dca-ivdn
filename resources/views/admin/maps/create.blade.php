@extends('admin.master.master')
@section('content')

<div class="container">

    <h1 class="mt-3 mx-auto">Formulário de Cadastro de Mapa</h1>

    <form class="mt-5">
        <div class="form-group">
            <label for="inputState">Estado</label>
            <select id="inputState" class="form-control">
                <option selected>Selecione o Estado</option>
                <option>Paraíba</option>
                <option>Pernambuco</option>
            </select>
        </div>


        <select class="form-control mt-3">
            <option>Default select</option>
        </select>

        <select class="form-control">
            <option>Default select</option>
        </select>

        <div class="form-group">
            <label for="image">Mapa</label>
            <input type="file" class="form-control-file" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
