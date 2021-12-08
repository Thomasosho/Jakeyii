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
                            <h3 class="animated fadeInLeft">Dashboard</h3>
                            <p class="animated fadeInDown" style="line-height:.4;">
                              Welcome To Jakeyii.
                            </p>
                        </div>
                      </div>
                  </div>
                </div>
                <form action="{{ route('job.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="box-v5 panel">
                            <div class="panel-heading padding-0 bg-white border-none">
                                <textarea type="text" name="description" placeholder="Describe Job to be created"></textarea>
                            </div>
                            <div class="panel-body">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-6 col-sm-6 col-xs-6 tool">
                                <input type="file" name="document" class="form-control">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 padding-0">
                                <button class="btn btn-round pull-right">
                                    <span>SEND</span>
                                    <span class="icon-arrow-right icons"></span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-heading">
                        <h4>Job History</h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                      </div>
                      <div class="panel-body">
                        <div class="col-md-12 responsive-table">
                            <table class="table table-hover">
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th></th>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Laptop Acer X291</td>
                                <td>
                                  <span class="label label-primary">NEW</span>
                                </td>
                                <td>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                      <span class="icon-arrow-down icons"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Confirm</a></li>
                                      <li><a href="#">Ignore</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>LCD Tv 92Bd</td>
                                <td><span class="label label-primary">NEW</span></td>
                                <td>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                      <span class="icon-arrow-down icons"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Confirm</a></li>
                                      <li><a href="#">Ignore</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>aX Microphone X291</td>
                                <td><span class="label label-success">SOLD</span></td>
                                <td>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                      <span class="icon-arrow-down icons"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Confirm</a></li>
                                      <li><a href="#">Ignore</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Laptop Aspire E1 -471G</td>
                                <td><span class="label label-danger">CANCEL</span></td>
                                <td>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                      <span class="icon-arrow-down icons"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Confirm</a></li>
                                      <li><a href="#">Ignore</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                               <tr>
                                <td>5</td>
                                <td>Speaker D82K</td>
                                <td><span class="label label-success">SOLD</span></td>
                                <td>
                                  <div class="btn-group" role="group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                      <span class="icon-arrow-down icons"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Confirm</a></li>
                                      <li><a href="#">Ignore</a></li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            </table>
                            <center>
                              <div class="btn-group" role="group" aria-label="..." style="margin-top:20px;">
                                      <button type="button" class="btn">
                                        <span class="icon-arrow-left icons"></span>
                                      </button>
                                      <button type="button" class="btn active">1</button>
                                      <button type="button" class="btn">2</button>
                                      <button type="button" class="btn">
                                        <span class="icon-arrow-right icons"></span>
                                      </button>
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