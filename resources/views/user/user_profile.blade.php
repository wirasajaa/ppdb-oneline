@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center gap-4">
      @if (session('query'))
        <div class="col-md-12">
          <div class="alert alert-success">
            {{ session('query') }}
          </div>
        </div>
      @endif
      <div class="col mb-4 profile-section">
        <h2 class="fw-bold">Profile</h2>
        <hr>
        <div class="d-flex gap-4 align-items-center">
          <div class="image-profile" style="">
            <img src="{{ asset('storage/profile_image/profile.jpg') }}" alt="">
          </div>
          <div class="user-data">
            <h3>{{ auth()->user()->name }}</h3>
            <h5>{{ auth()->user()->level }}</h5>
            <p class="mb-2"><i class="fa-solid fa-location-dot"></i> Bandung, Indonesia</p>
            <a href="#" class="link-info"><i class="fa-solid fa-pen-to-square"></i> Edit account</a>
          </div>
        </div>

      </div>
      <div class="col-md-7">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
              type="button" role="tab" aria-controls="nav-home" aria-selected="true">Personal Data</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
              type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Father Data</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
              type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Mother Data</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
            @if ($personal == null)
              <h4>Data is not set!</h4>
            @else
              <table cellpadding="3" cellspacing="3">
                <tr>
                  <td>NISN</td>
                  <td>:</td>
                  <th>{{ $personal->nisn }}</th>
                </tr>
                <tr>
                  <td>NIK</td>
                  <td>:</td>
                  <td>{{ $personal->nik }}</td>
                </tr>
                <tr>
                  <td>Birth Place, Day</td>
                  <td>:</td>
                  <td>{{ $personal->birthplace . ', ' . date('d M Y', strtotime($personal->birthday)) }}</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>:</td>
                  <td>{{ $personal->gender }}</td>
                </tr>
                <tr>
                  <td>Religion</td>
                  <td>:</td>
                  <td>{{ $personal->religion }}</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>:</td>
                  <td>{{ $personal->phone }}</td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>:</td>
                  <td>
                    {{ $personal->address . ' ' . $personal->village . ' ' . $personal->district . ' ' . $personal->city . ' ' . $personal->province }}
                  </td>
                </tr>
              </table>
            @endif
          </div>
          <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
            tabindex="0">
            @if (@$father == null)
              <h4>Data is not set!</h4>
            @else
              <table cellpadding="3" cellspacing="3">
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <th>{{ $father->name }}</th>
                </tr>
                <tr>
                  <td>NIK</td>
                  <td>:</td>
                  <td>{{ $father->nik }}</td>
                </tr>
                <tr>
                  <td>Study</td>
                  <td>:</td>
                  <td>{{ $father->study }}</td>
                </tr>
                <tr>
                  <td>Job</td>
                  <td>:</td>
                  <td>{{ $father->job }}</td>
                </tr>
                <tr>
                  <td>Salary</td>
                  <td>:</td>
                  <td>{{ $father->salary }}</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>:</td>
                  <td>{{ $father->phone }}</td>
                </tr>
              </table>
            @endif
          </div>
          <div class="tab-pane fade py-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
            tabindex="0">
            @if (@$mother == null)
              <h4>Data is not set!</h4>
            @else
              <table cellpadding="3" cellspacing="3">
                <tr>
                  <td>Name</td>
                  <td>:</td>
                  <th>{{ $mother->name }}</th>
                </tr>
                <tr>
                  <td>NIK</td>
                  <td>:</td>
                  <td>{{ $mother->nik }}</td>
                </tr>
                <tr>
                  <td>Study</td>
                  <td>:</td>
                  <td>{{ $mother->study }}</td>
                </tr>
                <tr>
                  <td>Job</td>
                  <td>:</td>
                  <td>{{ $mother->job }}</td>
                </tr>
                <tr>
                  <td>Salary</td>
                  <td>:</td>
                  <td>{{ $mother->salary }}</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>:</td>
                  <td>{{ $mother->phone }}</td>
                </tr>
              </table>
            @endif
          </div>
        </div>
        <div class="text-center"><a href="/registration" class="btn btn-primary">Change Data</a></div>
      </div>
    </div>
  </div>
@endsection
