@extends('layouts.backend')

@section('nav_title', 'product management')

@push('css')
@endpush

@section('content')
    <div class="block-header">
        <a class="btn btn-info waves-effect" href="{{ route('admin.products.index') }}">
            <i class="material-icons">format_list_bulleted</i>
            <span>the list of products</span>
        </a>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title text-uppercase">add new product</h4>
            <p class="category"></p>
        </div>
        <div class="card-body">
          <form action="{{ route('admin.products.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group  {{ $errors->has('name') ? 'focused error' : '' }}">
                  <label for="name" class="form-label">Title</label>
                  <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
              </div>
              @if ($errors->has('name'))
                <p><i class="material-icons text-danger">error</i><small class="text-danger align-top">{{ $errors->first('name') }}</small></p>
              @endif

              <div class="form-group {{ $errors->has('description') ? 'focused error' : '' }}">
                  <label for="description" class="form-label">Description</label>
                  <textarea id="editor" name="description">{{ old('description') }}</textarea>
              </div>
              @if ($errors->has('description'))
                <p><i class="material-icons text-danger">error</i><small class="text-danger align-top">{{ $errors->first('description') }}</small></p>
              @endif

              <div class="form-group {{ $errors->has('price') ? 'focused error' : '' }}">
                  <label for="price" class="form-label">Price en (EUR)</label>
                  <input type="text" id="price" class="form-control" name="price" value="{{ old('price') }}">
              </div>
              @if ($errors->has('price'))
                <p><i class="material-icons text-danger">error</i><small class="text-danger align-top">{{ $errors->first('price') }}</small></p>
              @endif

               <div class="form-group col-6 pl-0 {{ $errors->has('category_id') ? 'focused error' : '' }}">
                  <label for="category" class="form-label">Attaching product to categories</label>
                  <select name="category_id" id="category" class="w-100 mt-3 selectpicker show-menu-arrow show-tick" data-live-search="true" data-style="btn-info" title="Your category">

                    @forelse ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                        <p>No categories</p>
                    @endforelse

                  </select>
              </div>
              @if ($errors->has('category_id'))
                <p><i class="material-icons text-danger">error</i><small class="text-danger align-top">{{ $errors->first('category_id') }}</small></p>
              @endif


              <div class="form-group {{ $errors->has('image') ? 'focused error' : '' }}">
                  <label for="image" class="form-label">Image</label>
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input name="image" type="file" class="custom-file-input" id="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                  </div>
              </div>
              @if ($errors->has('image'))
                <p><i class="material-icons text-danger">error</i><small class="text-danger align-top">{{ $errors->first('image') }}</small></p>
              @endif


              <button type="submit" class="btn btn-default waves-effect"><i class="fas fa-database mr-1"></i>Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
@endsection

@push('js')
<script src="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.0.0/autoNumeric.min.js') }}" type="text/javascript" async defer></script>
<script src="{{ secure_asset('https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js') }}" type="text/javascript" async defer></script>
<script src="{{ secure_asset('https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js') }} " type="text/javascript"  async defer></script>
<script>
      $( document ).ready( function() {
        /*const price = new AutoNumeric('#price', 'commaDecimalCharDotSeparator');*/

        new AutoNumeric('#price', AutoNumeric.getPredefinedOptions().numericPos.float);
        $('select').selectpicker();
        CKEDITOR.replace('editor', {
        skin: 'moono',
        enterMode: CKEDITOR.ENTER_BR,
        shiftEnterMode:CKEDITOR.ENTER_P,
        toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
                   { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                   { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
                   { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                   { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                   { name: 'links', items: [ 'Link', 'Unlink' ] },
                   { name: 'insert', items: [ 'Image'] },
                   { name: 'spell', items: [ 'jQuerySpellChecker' ] },
                   { name: 'table', items: [ 'Table' ] }
                   ],
        });
    });
</script>
@endpush
