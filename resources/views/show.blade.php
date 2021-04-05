@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="form-group row">
                            <label for="id" maxlength="25" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value = " 1 " required autocomplete="id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nome" maxlength="25" class="col-md-4 col-form-label text-md-right">{{ __('nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" value = "{{ $associado ->nome }} "name="nome" required autocomplete="nome">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" maxlength="25" class="col-md-4 col-form-label text-md-right">{{ __('E mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value= "{{$associado ->email}}" required autocomplete="email">
                            </div>
                        </div>
        </div>
    </div>
</div>
@endsection
