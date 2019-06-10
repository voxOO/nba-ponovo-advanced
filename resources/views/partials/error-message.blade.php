

    @if ($errors->has($fieldTitle))
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->get($fieldTitle) as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
    @endif