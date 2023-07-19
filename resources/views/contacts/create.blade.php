@extends('layouts.main')

@section('title', 'ContactApp | Create Contact')
@section ('content')
<main class="py-5">
    
      <div class="container">
        <div class="row">

  
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <strong>Add Contact</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-8">
                        <input type="text" name="name" id="name" class="form-control">
                      </div>
                    </div>



                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Phone</label>
                      <div class="col-md-8">
                        <input type="text" name="phone" id="phone" class="form-control">
                      </div>
                    </div>

 
                    <div class="form-group row" id="add-new-group">
                      <div class="offset-md-3 col-md-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" name="group_id" placeholder="Enter group name" aria-label="Enter group name" aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                              <i class="fa fa-check"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                   
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-offset-3 col-md-6">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Back to all Contacts</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    @endsection

