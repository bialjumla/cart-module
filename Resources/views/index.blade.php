@extends('cart::layouts.master')

@section('content')
    <h1>Hello World</h1>
	<img src="dd">
    <p>
        This view is loaded from module: {!! config('cart.name') !!}
    </p>
@endsection
