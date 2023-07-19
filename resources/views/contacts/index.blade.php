@extends('layouts.main')

@section('title', 'ContactApp')

@section('content')

<main class="pt-5">
      <div class="container">
        <div class="row">
        
        @include('contacts.sidebar')
  
          <div class="col-md-9">
            <div class="card">
              <div class="card-header"><strong>All Contacts</strong></div>
              <table class="table">
               {{-- @forelse ($contacts as $id => $contact)
               
               @include ('contacts._contact', ['contact' => $contact])
                

                @empty

<p>No Contact Found</p>

@endforelse --}}

@each('contacts._contact', $contacts, 'contact', 'contacts._empty')
              </table>    
              
            </div>
          </div>
        </div>
      </div>
    </main>

            @endsection