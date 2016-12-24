@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Edit!!!</div>
                <div class="panel-body">
                    {{-- @see <http://microformats.org/wiki/h-card> --}}
                    {{-- @see <https://www.w3.org/TR/html5/forms.html#attr-input-type> --}}
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('users.update', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

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
                                <input id="url" type="url" class="form-control" name="url" value="{{ $user->url }}">
                            </div>
                        </div>

                        {{-- UID --}}
                        <div class="form-group">
                            <label for="uid" class="col-md-4 control-label">UID</label>
                            <div class="col-md-6">
                                <input id="uid" type="text" class="form-control" name="uid" value="{{ $user->uid }}">
                            </div>
                        </div>

                        {{-- Category --}}
                        <div class="form-group">
                            <label for="category" class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" value="{{ $user->category }}">
                            </div>
                        </div>

                        {{-- Tel --}}
                        <div class="form-group">
                            <label for="tel" class="col-md-4 control-label">Tel</label>
                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control" name="tel" value="{{ $user->tel }}">
                            </div>
                        </div>

                        {{-- Bday --}}
                        <div class="form-group">
                            <label for="bday" class="col-md-4 control-label">Bday</label>
                            <div class="col-md-6">
                                <input id="bday" type="date" class="form-control" name="bday" value="{{ $user->bday }}">
                            </div>
                        </div>

                        {{-- Key --}}
                        <div class="form-group">
                            <label for="key" class="col-md-4 control-label">Key</label>
                            <div class="col-md-6">
                                <input id="key" type="text" class="form-control" name="key" value="{{ $user->key }}">
                            </div>
                        </div>

                        {{-- Org --}}

                        {{-- Job Title --}}
                        <div class="form-group">
                            <label for="job-title" class="col-md-4 control-label">Job Title</label>
                            <div class="col-md-6">
                                <input id="job-title" type="text" class="form-control" name="job_title" value="{{ $user->job_title }}">
                            </div>
                        </div>

                        {{-- Role --}}
                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" value="{{ $user->role }}">
                            </div>
                        </div>

                        {{-- IMPP --}}
                        <div class="form-group">
                            <label for="impp" class="col-md-4 control-label">IMPP</label>
                            <div class="col-md-6">
                                <input id="impp" type="text" class="form-control" name="impp" value="{{ $user->impp }}">
                            </div>
                        </div>

                        {{-- Sex --}}
                        <div class="form-group">
                            <label for="sex" class="col-md-4 control-label">Sex</label>
                            <div class="col-md-6">
                                <input id="sex" type="text" class="form-control" name="sex" value="{{ $user->sex }}">
                            </div>
                        </div>

                        {{-- Gender Identity --}}
                        <div class="form-group">
                            <label for="gender-identity" class="col-md-4 control-label">Gender Identity</label>
                            <div class="col-md-6">
                                <input id="gender-identity" type="text" class="form-control" name="gender_identity" value="{{ $user->gender_identity }}">
                            </div>
                        </div>

                        {{-- Anniversary --}}
                        <div class="form-group">
                            <label for="anniversary" class="col-md-4 control-label">Anniversary</label>
                            <div class="col-md-6">
                                <input id="anniversary" type="date" class="form-control" name="anniversary" value="{{ $user->anniversary }}">
                            </div>
                        </div>

                        {{-- Update Button--}}
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
