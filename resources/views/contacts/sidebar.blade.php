<div class="col-md-3">
            <div class="list-group">
                @foreach ($companies as $id => $name)
              <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">{{ $name }} </a>

              @endforeach
            </div>
          </div><!-- /.col-md-3 -->