@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="card-form" action="{{ route('cards.store') }}" method="POST">
                            {!! csrf_field() !!}
                            <fieldset>
                                Create Your Card
                            </fieldset>
                            <hr>
                            <p class="card-form__item">
                                <label for="name">Name</label>
                                <input id="name" name="name" type="text">
                            </p>
                            <p class="card-form__item">
                                <label for="nickname">Nickname</label>
                                <input id="nickname" name="nickname" type="text">
                            </p>
                            <p class="card-form__item">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="text">
                            </p>
                            <p class="card-form__item">
                                <label for="url">URL</label>
                                <input id="url" name="url" type="text">
                            </p>
                            <p class="card-form__item">
                                <label for="tel">@lang('cards.tel')</label>
                                <input id="tel" name="tel" type="tel">
                            </p>
                            <button class="card-form__submit-button" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
