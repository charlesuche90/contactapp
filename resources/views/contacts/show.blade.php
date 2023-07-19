@extends ('layouts.main')

@section('title', 'ContactApp | Show One Contact')
@section('content')

<main class="pt-5">
      <div class="container">
        <div class="row">

  
          <div class="col-md-9">
            <div class="card">
              <div class="card-header"><strong> Contact</strong></div>
              <table class="table">
                <tr>
                  <td class="middle">
                    <div class="media">
                      
                      <div class="media-body">Name:
                        <h4 class="media-heading">{{ $contact['name']}}</h4>
                        <address>
                          <strong>Phone</strong><br>
                          {{ $contact['phone']}}
                        </address>
                      </div>
                    </div>
                  </td>
                 
                </tr>

              </table>    

            </div>
            <div><a href='{{ route('contacts.index') }}'>Back to all contacts</a></div>
          </div>
        </div>
      </div>
    </main>

            

            @endsection