@extends('layouts.backend')

@section('nav_title', 'category management')


@push('css')

@endpush

@section('content')

    <!-- Create new categories -->
    <div class="block-header">
        <a class="btn btn-info waves-effect" href="{{ route('admin.categories.create') }}">
            <i class="material-icons">format_list_bulleted</i>
            <span>create new categories</span>
        </a>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title text-uppercase">UPDATE YOUR category N°: {{ $category->id }}</h4>
            <p class="category"></p>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

              <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="form-label">Category name</label>
                  <input type="text" id="name" class="form-control" name="name" value="{{$category->name}}">
              </div>
              @if($errors->has('name'))
                <p><i class="material-icons text-danger">error</i><small class="text-danger align-top">{{ $errors->first('name') }}</small></p>
              @endif


              <button type="submit" class="btn btn-default waves-effect"><i class="fas fa-database mr-1"></i>Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
@endsection
