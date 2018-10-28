        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">Emails extract</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="{{ Request::is('email_list') ? 'active' : '' }}">
                      <a href="{{ url('email_list') }}">Emails list</a>
                  </li>
                  <li class="{{ Request::is('/') ? 'active' : '' }}">
                      <a href="{{ url('/') }}">Upload Csv</a>
                  </li>
                  <!-- <li><a href="#">Page 2</a></li> -->
                  <!-- <li><a href="#">Page 3</a></li> -->
                </ul>
            </div>
        </nav>