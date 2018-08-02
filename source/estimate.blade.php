@extends('_layouts.inner')
@section('body')
  @verbatim
    <div id="el">
      {{ message }}
    </div>
  @endverbatim
<script>
  new Vue({
    data: {
      message: 'Vue Working!!!'
    }
  }).$mount('#el')
</script>
@endsection
