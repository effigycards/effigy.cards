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

                            {{-- Name --}}
                            <p class="card-form__item card-form__item_required">
                                <label for="name">Name<span class="card-form__item-label_required">*</span></label>
                                <input id="name" name="name" type="text" value="{{ $name }}" required>
                            </p>

                            {{-- Nickname --}}
                            <p class="card-form__item">
                                <label for="nickname">Nickname</label>
                                <input id="nickname" name="nickname" type="text">
                            </p>

                            {{-- Email --}}
                            <p class="card-form__item">
                                <label for="email">Email<span class="card-form__item-label_required">*</span></label>
                                <input id="email" name="email" type="email" value="{{ $email }}" disabled required>
                            </p>

                            {{-- URL --}}
                            <p class="card-form__item">
                                <label for="url">URL</label>
                                <input id="url" name="url" type="url">
                            </p>

                            {{-- Tel --}}
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
