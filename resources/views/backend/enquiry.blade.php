@extends('backend.layouts.main')
@section('main-container')
    
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Enquiry List </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Enquiry List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <h4 class="card-title">Enquiry List</h4> --}}
                    {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Phone </th>
                          <th> Subject </th>
                          <th> Message </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                            $sn=1;
                        @endphp
                        @foreach ($enquiryList as $item)
                        <tr>
                            <th>{{$sn++}}</th>
                          <td class="py-1">{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->phone}}</td>
                          <td>{{$item->subject}}</td>
                          <td>{{$item->message}}</td>
                          <td>
                            {{-- <a href="{{url('edit_admin/'.$key->id)}}"class="btn text-info">Edit</a> --}}
                            <a href=""class="btn text-danger">Delete</a>

                          </td>

                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          @endsection