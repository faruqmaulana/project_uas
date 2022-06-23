@extends('profile.layouts.main')

@section('container')
  <div class="col">
    <div class="d-flex align-items-center justify-content-between">
      <div>
        <p class="font-lg-xl font-bold">Detail akun</p>
        <p class="font-md font-bold color-gray">Disini kamu bisa mengatur detail akunmu</p>
      </div>
      <!-- @if(session()->has('updateSuccess'))
      <div class="col-6 alert alert-success alert-dismissible fade show" role="alert" style="width: 47%;" id="success-alert">
          {{ session('updateSuccess') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif -->
    </div>
    <div class="d-flex justify-content-between">
      <div class="email-box bg-gray-profile d-flex justify-content-between flex-column font-md font-bold p-3">
        <div>
          <p class="color-gray">Email</p>
          <p class="color-gray-secondary">{{ auth()->user()->email }}</p>
        </div>
        <div>
          <hr>
          <a href="/my-profile-setting" class="d-flex justify-content-end">
            <p class="color-red" style="margin-bottom: 7px;">PENGATURAN AKUN</p>
          </a>
        </div>
      </div>
      <form action="/my-profile" method="POST" style="width: 410px;">
        @csrf {!! method_field('PUT') !!}  
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="hidden" name="id" value="{{ auth()->user()->id }}">
          <input name="username" type="text" class="form-control" value="{{ auth()->user()->username }}">
        </div>
        <div class="mb-3">
          <label class="form-label">Citizen ID</label>
          <input type="text" class="form-control" value="14281937912301980298" disabled>
        </div>
        <div class="d-flex justify-content-end pt-2">
          <button type="submit" class="btn btn-red font-md font-white font-bold" style="width: 197px;">Simpan</button>
        </div>
      </form>
    </div>
  </div>
@endsection