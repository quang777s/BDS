@extends('layouts.bds')

@section('content')
<div class="row">
@foreach ($infos as $key => $info)
    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="{{ url('nha-dat/'.$info->id) }}"><img class="card-img-top" src="{{ strtok($info->imgs, ',') }}" alt=""></a>
            <div class="card-body">
            <h4 class="card-title">
                <a href="{{ url('nha-dat/'.$info->id) }}">{{ $info->title }}</a>
            </h4>
            <p class="card-text">{{ (strlen($info->desc) > 400) ? substr($info->desc, 0, 400) . '...' : $info->desc }}</p>
            </div>
        </div>
    </div>
@endforeach
</div>

{{ $infos->links() }}
@endsection
