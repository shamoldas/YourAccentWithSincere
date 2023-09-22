<section class="mt-3">
        <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                	  <a class="list-group-item list-group-item-action" href="{{route('admin.home')}}">Home</a>
                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
        </div>

            <div class="list-group">

             <a class="list-group-item list-group-item-action" href="{{route('category')}}">Topic Category</a>
              <a class="list-group-item list-group-item-action" href="{{url('post')}}">All Post</a>
            <a class="list-group-item list-group-item-action" href="{{route('mypost')}}">MyPost</a>           
           	  <a class="list-group-item list-group-item-action" href="{{route('userList')}}">Role Deviler</a>                    
                
                 
                

                                    <a class="list-group-item list-group-item-action" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                               
            </div>
</section>

