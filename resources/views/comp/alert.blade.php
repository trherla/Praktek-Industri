
@if(Session::has('after_save'))
  <div class="row">
    <div class="col-md-12 text-center">
        <div class="alert alert-dismissible alert-{{ Session::get('after_save.alert') }}">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ Session::get('after_save.title') }}</strong>

          
          <br>{{ Session::get('after_save.text-1') }}<br> 
          <strong> {{ Session::get('after_save.text-2') }}</strong>
        </div>
    </div>
</div>
@endif
