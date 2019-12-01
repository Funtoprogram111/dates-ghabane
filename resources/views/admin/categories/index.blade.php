@extends('layouts.backend')

@section('nav_title', 'category management')


@push('css')

@endpush

@section('content')
    <div class="block-header">
        <a class="btn btn-info waves-effect" href="{{ route('admin.categories.create') }}">
            <i class="material-icons">add</i>
            <span>add new category</span>
        </a>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title text-uppercase">the list of categories</h4>
            <p class="category"><span class="badge badge-warning text-lowercase">{{ $categories->count() }} {{ Str_plural('records', $categories->count()) }} in our database</span></p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
              <table id="Categoriesdatatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead>
                  <tr>
                      <th>#ID</th>
                      <th>Name</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>#ID</th>
                      <th>Name</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Action</th>
                  </tr>
                  </tfoot>
                  <tbody>

                      <!-- categories -->
                      @foreach($categories as $category)

                          <tr>
                              <td>{{ $category->id }}</td>
                              <td>{{ $category->name }}</td>
                              <td>{{ $category->created_at }}</td>
                              <td>{{ $category->updated_at }}</td>
                              <td class="text-center">
                                  <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info btn-round btn-fab waves-effect">
                                      <i class="material-icons">edit</i>
                                  </a>
                                  <button class="btn btn-danger btn-round btn-fab waves-effect" type="button" onclick="deleteCategorie({{ $category->id }})">
                                      <i class="material-icons">delete</i>
                                  </button>
                                  <form id="delete-form-{{ $category->id }}" action="{{ route('admin.categories.destroy',$category->id) }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  </form>
                              </td>
                          </tr>

                      @endforeach
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('js')
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/ -->
<script src="{{ secure_asset('backend/js/plugins/jquery.datatables.min.js') }}"></script>
<script src="{{ secure_asset('https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js') }}"></script>
<script type="text/javascript">
  function deleteCategorie(id) {
            swal({
                title: 'êtes-vous sûr ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Deletion !',
                cancelButtonText: 'Canceled !',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                    Swal.fire(
                      'Deleted!',
                      'Your category has been deleted successfully !',
                      'success'
                    );
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                )
                {
                    swal(
                        'Your deletion has been canceled !'
                    );
                }
            });
        }
  $(document).ready(function() {
    $('#Categoriesdatatable').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'excel',
              'print',
              'pdfHtml5',
              'copyHtml5',
          ]
      });
  });
</script>
@endpush
