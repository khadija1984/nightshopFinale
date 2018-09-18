@include('includes._menu')


Bienvenue: {{Auth::user()->username}}<br>
{{Auth::user()->email}}