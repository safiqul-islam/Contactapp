@extends('layouts.main')
@section('title','Contact app | Add New Contacts')
@section('content')

    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Contact</strong>
              </div>

              <div class="card-body">
                  <form action="{{ route('contact.store') }}" method="post">
                      @csrf
                      @include('contact._form')
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
