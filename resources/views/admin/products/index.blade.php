@extends('layouts.backend')

@section('nav_title', 'product management')


@section('content')


    <div class="block-header">
        <a class="btn btn-info waves-effect" href="{{ route('admin.products.create') }}">
            <i class="material-icons">add</i>
            <span>add new product</span>
        </a>
    </div>


    <div class="row">
      <div class="col-12">
        <div class="card">
        <div class="card-header card-header-info">
            <h4 class="card-title text-uppercase">the list of Products</h4>
            <p class="category"><span class="badge badge-warning text-lowercase">{{ $products->count() }} {{ Str_plural('records', $products->count()) }} in our database</span></p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
              <table id="Productsdatatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead class="text-small">
                  <tr>
                      <th>#ID</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>description</th>
                      <th>category</th>
                      <th>Created_At</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>#ID</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>description</th>
                      <th>category</th>
                      <th>Created_At</th>
                      <th>Action</th>
                  </tr>
                  </tfoot>
                  <tbody>

                      <!-- products -->

                      @forelse($products as $product)

                          <tr>
                              <td>{{ $product->id }}</td>
                              <td><img width="50px" class="img-fluide" src="{{ secure_url('Products/'.$product->image) }}" alt="dates_ghabane"/></td>
                              <td>{{ $product->name }}</td>
                              <td>{!! str_limit($product->description, $limit = 20, $end = '...') !!}</td>
                              <td class="text-success font-weight-bold">{{ $product->category->name }}</td>
                              <td>{{ $product->created_at }}</td>
                              <td class="text-center">
                                  <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-info btn-round btn-fab waves-effect">
                                      <i class="material-icons">edit</i>
                                  </a>
                                  <button class="btn btn-danger btn-round btn-fab waves-effect" type="button" onclick="deleteProducts({{ $product->id }})">
                                      <i class="material-icons">delete</i>
                                  </button>
                                  <form id="delete-form-{{ $product->id }}" action="{{ route('admin.products.destroy',$product->id) }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  </form>
                              </td>
                          </tr>

                          @empty

                          <p><small class="">No products in our database</small></p>

                          @endforelse

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
  $(document).ready(function() {
    $('#Productsdatatable').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'excel',
              'print',
              'pdfHtml5',
              'copyHtml5',
          ],
           "bPaginate":true,
           "sPaginationType":"full_numbers",
           "bLengthChange": true,
           "bInfo" : true
      });
  });
  function deleteProducts(id) {
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
                      'Your product have been deleted successfully !',
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
</script>
@endpush
