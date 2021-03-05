<div class="container-fluid">
<a href="/works" class="navbar-brand">Deliverable</a>
    @guest
       <div class="form-inline">
         <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
         </li>
         @if (Route::has('register'))
           <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録する') }}</a>
           </li>
         @endif
         @else
           <li class="dropdown-menu">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               {{ Auth::user()->name }} <span class="caret"></span>
             </a>

             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
               </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
             </div>
           </li>
       </div>
           @endguest
           </div>