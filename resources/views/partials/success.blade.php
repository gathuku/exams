@if(session()->has('success'))
<div class="alert alert-primary" role="alert">
  <li>{{ session()->get('success')}}</li>
</div>
@endif
