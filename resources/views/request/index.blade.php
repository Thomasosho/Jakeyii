@extends('layouts.pap')

@section('content')

<!-- start: Content -->
<div id="content">
            <div class="col-md-12 padding-0">
              <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                  <div class="panel box-shadow-none content-header">
                      <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Requests</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Welcome Admin!
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
              <div class="col-md-12">
                  <div class="panel">
                      <div class="panel-heading">
                        <h4>Job Requests</h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12 responsive-table">
                            <table class="table table-hover">
                              <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Paid?</th>
                                <th>Action</th>
                              </tr>
                              @foreach($jobs as $key => $job)
                                <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$job->description}}</td>
                                  <td>
                                    <span class="label label-primary">{{$job->status_user}}</span>
                                  </td>
                                  <td>
                                    <span class="label label-primary">{{$job->status_admin}}</span>
                                  </td>
                                  <td>
                                    <a href="{{ route('requests.show',$job->id)}}" style="float:left;" data-toggle="tooltip" data-original-title="View">
                                      <i class="fas fa-eye-alt text-inverse mr-2"></i> view
                                  </a>
                                  </td>
                                </tr>
                              @endforeach
                            </table>
                            <center>
                              <div class="btn-group" role="group" aria-label="..." style="margin-top:20px;">
                               {!! $jobs->links() !!}
                              </div>
                            </center>
                        </div>
                      </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
          <!-- end: Content -->

@endsection