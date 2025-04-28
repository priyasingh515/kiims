@extends('backend.layouts.main')
@section('main-container')
<style>
  .hidden{
    display: none;
  }
</style>
    
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Association List </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Association List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <h4 class="card-title">Enquiry List</h4> --}}
                    {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
                    {{-- </p> --}}
                    <div class="table-responsive">
                    <table class="table  table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Organization Name </th>
                          <th> Institution SPOC </th>
                          <th> Phone Number </th>
                          <th> Email </th>
                          <th>SPOC Designation  </th>
                          <th> State </th>
                          <th> City </th>
                          <th> Pincode </th>
                          <th> GSTIN </th>
                          <th> Institution Address </th>
                          <th> Carpet Aera </th>
                          <th> Total Area </th>
                          <th> Want to work </th>
                          <th> Course Name </th>
                        
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $sn=1;
                        @endphp
                        @foreach ($data as $records)
                        <tr>
                            <th>{{$sn++}}</th>
                          <td class="py-1">{{$records->orgnization_name}}</td>
                          <td>{{$records->institution_spoc}}</td>
                          <td>{{$records->phone_number}}</td>
                          <td>{{$records->email}}</td>
                          <td >{{$records->designation_spoc}}</td>
                          <td >{{$records->state}}</td>

                          <td >{{$records->city}}</td>

                          <td >{{$records->pincode}}</td>

                          <td >{{$records->gstin}}</td>

                          <td >{{$records->address}}</td>

                          <td >{{$records->carpet_area}}</td>

                          <td >{{$records->total_area}}</td>

                          <td >

                          @php
    $works = json_decode($records->works, true);
@endphp

@if(is_array($works))
    {{ implode(', ', $works) }}
@else
    No sectors selected.
@endif

                          </td>

                          <td >{{$records->course_name}}</td>

                          <td>
                           <a href="{{ url('admin/delete/associate/'.$records->id)}}"class="btn text-danger">Delete</a>
                          </td>

                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                    {{ $data->links() }}
                  </div>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          @endsection