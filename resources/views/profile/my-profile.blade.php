@extends('profile.layouts.main')
@section('container')
  <div class="col-8">
    <div class="d-flex align-items-center justify-content-between">
      <div>
        <p class="font-lg-xl font-bold">Detail akun</p>
        <p class="font-md font-bold color-gray">Disini kamu bisa mengatur detail akunmu</p>
      </div>
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
      <form id="submitForm" method="POST" style="width: 50%; margin-left:20px;" >
        @csrf {!! method_field('PUT') !!}  
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="hidden" name="id" value="{{ auth()->user()->id }}">
          <input name="username" type="text" class="form-control" value="{{ auth()->user()->username }}" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Citizen ID</label>
          <input name="citizen_id" type="text" class="form-control" value="{{ auth()->user()->citizen_id }}">
        </div>
        <div class="d-flex justify-content-end pt-2">
          <button id="process" type="submit" class="btn btn-red font-md font-white font-bold update-data" style="width: 197px;">Simpan</button>
        </div>
      </form>
    </div>
  </div>
@endsection