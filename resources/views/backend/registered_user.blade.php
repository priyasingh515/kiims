@extends('backend.layouts.main')
@section('main-container')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Registration List </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Registration List</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Enrollment Id</th>
                            <th> Course </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Aadhar </th>
                            <th>Photo</th>
                            <th>Signature</th>
                            <th>Father name</th>
                            <th>Mother name</th>
                            <th>Gender</th>
                            <th>D.O.B</th>
                            <th>Religion</th>
                            <th>Disability</th>
                            <th>Disadvantage</th>
                            <th>Medium</th>
                            <th>Pin</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $sn=1;
                          @endphp
                          @foreach ($UserList as $item)
                          <tr>
                            <td>{{$sn++}}</td>
                            <th>{{$item->enrol_id}}</th>
                            <td>
                              @if($item->course == 'ot')
                              O.T
                              @elseif($item->course == 'dmit')
                                D.M.I.T
                              @elseif($item->course == 'emt')
                              E.M.T
                              @elseif($item->course == 'opthemic')
                              OPTHEMIC
                              @elseif($item->course == 'drasser')
                                 DRASSER
                              @elseif($item->course == 'ctmri')
                                CT/MRI/X-RAY/ICU
                              @endif
                            </td>
                            <td class="py-1">{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->aadhar}}</td>
                            <td>
                                <img src="{{url('/public/uploads/images/'.$item->image)}}" alt=""height="60"width="60">
                            </td>
                            <td>
                              <img src="{{url('/public/uploads/signs/'.$item->sign)}}" alt=""height="60"width="60">
                            </td>
                            <td>{{$item->fname}}</td>
                            <td>{{$item->mname}}</td>
                            <td>
                              @if($item->gender == 'F')
                              Female
                              @elseif($item->gender == 'M')
                                Male
                              @else
                                Other
                              @endif
                            </td>
                            <td>{{$item->dob}}</td>
                            <td>{{$item->religion}}</td>
                            <td>
                              @if($item->disability == 'Y')
                              Yes
                              @elseif($item->disability == 'N')
                                No
                              @endif
                            </td>
                            <td>
                              
                              @if($item->disadvantaged == 'Y')
                              Yes
                              @elseif($item->disadvantaged == 'N')
                                No
                              @endif

                            </td>
                            <td>
                              @if($item->medium == 'H')
                              Hindi
                              @elseif($item->medium == 'E')
                                English
                              @endif
                            </td>
                            <td>{{$item->pin}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->state}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                              @if($item->status == 'pending')
                                  <span class="badge bg-warning text-dark">Pending</span>
                              @elseif($item->status == 'approved')
                                  <span class="badge bg-success">Approved</span>
                              @elseif($item->status == 'cancel')
                                  <span class="badge bg-danger">Cancelled</span>
                              @endif
                               
                            </td>
                            <td>
                              <a href="javascript:void(0);"
                                class="btn text-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#statusModal"
                                onclick="openStatusModal({{ $item->id }}, '{{ $item->status }}')">
                                Edit
                              </a>
                              <a href="{{route('admin.UserDlt',$item->id)}}"class="btn text-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <form action="{{ route('admin.status.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" id="modal_user_id">
                            <div class="modal-content" style="background-color: #fff;">
                              <div class="modal-header">
                                <h5 class="modal-title" id="statusModalLabel">Update Status</h5>
                                <button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close">
                                    &times;
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label for="status" class="form-label">Select Status</label>
                                  <select name="status" id="modal_status" class="form-control" required>
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="cancel">Cancelled</option>
                                  </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div> <!-- End table-responsive -->
                  </div>
                  
                </div>
              </div>
             
            </div>
          </div>
          
          @endsection

          <script>
            function openStatusModal(userId, currentStatus) {
                document.getElementById('modal_user_id').value = userId;
                document.getElementById('modal_status').value = currentStatus;
            }
        </script>

          