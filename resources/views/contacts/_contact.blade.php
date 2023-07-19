<tr>
                  <td class="middle">
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="http://placehold.it/100x100" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">{{ $contact['name'] }}</h4>
                        <address>
                        {{ $contact['phone'] }}
                        </address>
                      </div>
                    </div>
                  </td>
                  <td width="100" class="middle">
                    <div>
                      <a href="{{ route('contacts.show', $contact['id']) }}" class="btn btn-outline-secondary btn-circle btn-xs" title="Edit">
                        <i class="fa fa-edit"></i>
                      </a>
                      
                    </div>
                  </td>
                </tr>