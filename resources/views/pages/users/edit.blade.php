@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Edit!!!</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('users.update', $user->id) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        {{-- Name --}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus required>
                            </div>
                        </div>

                        {{-- Honorific Prefix --}}
                        <div class="form-group">
                            <label for="honorific-prefix" class="col-md-4 control-label">Honorific Prefix</label>
                            <div class="col-md-6">
                                <input id="honorific-prefix" type="text" class="form-control" name="honorific_prefix" value="{{ $user->honorific_prefix }}">
                            </div>
                        </div>

                        {{-- Honorific Suffix --}}
                        <div class="form-group">
                            <label for="honorific-suffix" class="col-md-4 control-label">Honorific Suffix</label>
                            <div class="col-md-6">
                                <input id="honorific-suffix" type="text" class="form-control" name="honorific_suffix" value="{{ $user->honorific_suffix }}">
                            </div>
                        </div>

                        {{-- Nickname --}}
                        <div class="form-group">
                            <label for="nickname" class="col-md-4 control-label">Nickname</label>
                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ $user->nickname }}">
                            </div>
                        </div>

                        {{-- URL --}}
                        <div class="form-group">
                            <label for="url" class="col-md-4 control-label">URL</label>
                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" value="{{ $user->url }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
