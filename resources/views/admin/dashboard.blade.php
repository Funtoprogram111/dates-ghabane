@extends('layouts.backend')


@section('content')

  <div class="container-fluid">
    <div class="row">


      <div class="col-lg-3">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">save</i>
            </div>
            <p class="card-category">{{ str_plural('category', count($cats)) }}</p>
            <h3 class="card-title">{{ count($cats) }} </h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>


      <div class="col-lg-3">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">save</i>
            </div>
            <p class="card-category">{{ str_plural('product', count($prods)) }}</p>
            <h3 class="card-title">{{ count($prods) }}</h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card card-stats">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">save</i>
            </div>
            <p class="card-category">{{ str_plural('order', count($orders)) }}</p>
            <h3 class="card-title">{{ count($orders) }}</h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card card-stats">
          <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
              <i class="material-icons">save</i>
            </div>
            <p class="card-category">{{ str_plural('address', count($addresses)) }}</p>
            <h3 class="card-title">{{ count($addresses) }}</h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>


    </div>

    <div class="row">

      <div class="col-lg-3">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">save</i>
            </div>
            <p class="card-category">{{ str_plural('email', count($emails)) }}</p>
            <h3 class="card-title">{{ count($emails) }}</h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="card card-stats">
          <div class="card-header card-header-default card-header-icon">
            <div class="card-icon">
              <i class="material-icons">save</i>
            </div>
            <p class="card-category">{{ str_plural('customer', count($users)) }}</p>
            <h3 class="card-title">{{ count($users) }}</h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>

    <h3 class="title text-center text-uppercase font-weight-bold">More information</h3>

    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
    <!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
    -->
    <li class="nav-item">
        <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
            <i class="material-icons">apps</i>
            Addresses
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
            <i class="material-icons">apps</i>
            pending orders
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
            <i class="material-icons">apps</i>
            delivered orders
        </a>
    </li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane" id="dashboard-1">
          <div class="table-responsive">
              <table id="Addressesdatatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead class="text-small">
                  <tr>
                      <th>#Costumer</th>
                      <th>Lastname</th>
                      <th>Firstname</th>
                      <th>E-mail</th>
                      <th>PhoneNumber</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>Zip code</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>#Costumer</th>
                      <th>Lastname</th>
                      <th>Firstname</th>
                      <th>E-mail</th>
                      <th>PhoneNumber</th>
                      <th>Country</th>
                      <th>State</th>
                      <th>Zip code</th>
                  </tr>
                  </tfoot>
                  <tbody>

                      <!-- products -->

                      @forelse($addresses as $address)

                          <tr>
                              <td class="text-info"><span class="badge badge-default">{{ $address->user->name }}</span></td>
                              <td>{{ $address->lastname }}</td>
                              <td>{{ $address->firstname }}</td>
                              <td>{{ $address->user->email }}</td>
                              <td>{{ $address->PhoneNumber }}</td>
                              <td>{{ $address->country }}</td>
                              <td>{{ $address->state }}</td>
                              <td>{{ $address->zipCode }}</td>
                          </tr>

                          @empty

                          <p><small class="">No addresses in our database</small></p>

                          @endforelse

                  </tbody>
              </table>
          </div>
    </div>
    <div class="tab-pane active" id="schedule-1">
      <div class="tab-pane" id="dashboard-1">
          <div class="table-responsive">
              <table id="PendingOrdersDatatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead class="text-small">
                  <tr>
                      <th>#costumer</th>
                      <th>#Product</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Quatity</th>
                      <th>Price HT (EUR)</th>
                      <th>Total shipping (EUR)</th>
                      <th>Delivered</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>#costumer</th>
                      <th>#Product</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Quatity</th>
                      <th>Price HT (EUR)</th>
                      <th>Total shipping (EUR)</th>
                      <th>Delivered</th>
                  </tr>
                  </tfoot>
                  <tbody>

                      <!-- products -->

                      @forelse($tables as $table)

                          <tr>
                              <td>

                                @if (Auth::check())
                                  <span class="badge badge-default">{{ Auth::user()->name }}</span>
                                @endif

                              </td>
                              <td><img width="50px" class="img-fluide" src="{{ $table->image }}" alt="dates_ghabane"/></td>
                              <td>{{ $table->slug }}</td>
                              <td class="text-info font-weight-bold"><span class="badge badge-primary">{{ $table->name }}</span></td>
                              <td class="text-info font-weight-bold">
                              @if ($table->delivered == 0)
                              <span class="badge badge-danger">pending</span>
                              @else
                              <span class="badge badge-success">delivered</span>
                              @endif
                              </td>
                              <td>{{ $table->qty }}</td>
                              <td>{{ floatval($table->price) }}</td>
                              <td><span class="badge badge-default">{{ floatval($table->total) }}</span></td>
                              <td>
                                <form style="display: contents;" action="{{route('admin.toggle-deliver',$table->order_id)}}" method="post" id="deliver-toggle">
                                  {{ csrf_field() }}
                                <div class="form-check form-check-inline">
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="1" name="delivered" {{$table->delivered==1?"checked":"" }}>
                                          <span class="form-check-sign">
                                              <span class="check"></span>
                                          </span>
                                      </label>
                                  </div>
                                  <button type="submit" value="Submit" class="btn btn-success btn-fab btn-fab-mini btn-round">
                                    <i class="material-icons">check</i>
                                  </button>
                                </form>
                              </td>
                          </tr>

                          @empty

                          <p><small>No pending products in our database</small></p>

                          @endforelse

                  </tbody>
              </table>
          </div>
    </div>
    </div>
    <div class="tab-pane" id="tasks-1">
        <div class="table-responsive">
              <table id="DeliveredOrdersDatatable" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                  <thead class="text-small">
                  <tr>
                      <th>#costumer</th>
                      <th>#Product</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Quatity</th>
                      <th>Price HT (EUR)</th>
                      <th>Total shipping (EUR)</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>#costumer</th>
                      <th>#Product</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Quatity</th>
                      <th>Price HT (EUR)</th>
                      <th>Total shipping (EUR)</th>
                  </tr>
                  </tfoot>
                  <tbody>

                      <!-- orders -->

                      @forelse($delivered as $del)

                          <tr>
                              <td>

                                @if (Auth::check())
                                  <span class="badge badge-default">{{ Auth::user()->name }}</span>
                                @endif

                              </td>
                              <td><img width="50px" class="img-fluide" src="{{ $del->image }}" alt="dates_ghabane"/></td>
                              <td>{{ $del->slug }}</td>
                              <td class="text-info font-weight-bold"><span class="badge badge-primary">{{ $del->name }}</span></td>
                              <td class="text-info font-weight-bold">
                              @if ($del->delivered == 1)
                              <span class="badge badge-success">delivered</span>
                              @else
                              <span class="badge badge-danger">pending</span>
                              @endif
                              </td>
                              <td>{{ $del->qty }}</td>
                              <td>{{ floatval($del->price) }}</td>
                              <td><span class="badge badge-default">{{ floatval($del->total) }}</span></td>
                          </tr>

                          @empty

                          <p><small class="">No delivered products in our database</small></p>

                          @endforelse

                  </tbody>
              </table>
          </div>
    </div>
</div>
      </div>
    </div>

  </div>

@endsection

@push('js')
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/ -->
<script src="{{ secure_asset('backend/js/plugins/jquery.datatables.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#Addressesdatatable').DataTable();
    $('#PendingOrdersDatatable').DataTable();
    $('#DeliveredOrdersDatatable').DataTable();
  });
</script>
@endpush
