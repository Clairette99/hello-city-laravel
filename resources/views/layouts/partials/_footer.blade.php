<footer>
     <p>&copy; Copyright {{ date('Y') }} 
         @if(!Route::is('about'))
             &middot; <a href="{{route('about')}}">About Us</a>
         @endif
    </p>
</footer>