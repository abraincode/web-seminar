@extends('dashboard.layout.master')

@section('title', 'Participant')

@section('css')
  <!-- iCheck -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
@endsection

@section('content-header')
  <h1>
    Participant
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Participant</li>
  </ol>
@endsection

@section('content')
  <div class="row">
    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Participant Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>No</th>
                  <th>ID Participant</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Job</th>
                  <th>Address</th>
                  <th>ZIP Code</th>
                  <th>City</th>
                  <th>Session</th>
                </tr>
                 @foreach ($participants as $participant)
                <tr>
                  <td>{{ $participant->id }}</td>
                  <td>{{ $participant->id_participant }}</td>
                  <td>{{ $participant->fullname }}</td>
                  <td>{{ $participant->email }}</td>
                  <td>{{ $participant->phone }}</td>
                  <td>{{ $participant->job }}</td>
                  <td>{{ $participant->address }}</td>
                  <td>{{ $participant->zip_code }}</td>
                  <td>{{ $participant->city }}</td>
                  <td>{{ $participant->session }}</td>
                </tr>
              @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
  </div>
@endsection

@section('js-src')
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="/bower_components/AdminLTE/plugins/morris/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/bower_components/AdminLTE/plugins/knob/jquery.knob.js"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
  <script src="/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
@endsection
