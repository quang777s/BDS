@extends('layouts.bds')

@section('content')
<div class="row">
    <h4 class="card-title">
        <a href="#">{{ $info->title }}</a>
    </h4>
    <p>
    {{ $info->desc }}
    </p>
</div>
@endsection
