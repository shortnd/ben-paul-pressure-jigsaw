@extends('_layouts.inner')
@section('body')
  <h2>Contact Me</h2>
  <form>
    <div class="form-group">
      <label for="name">Name</label>
      <input class="form-control" type="text" name="name" id="name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input class="form-control" type="email" name="email" id="email">
    </div>
    <div class="form-group"><label for="content">Content</label><textarea class="form-control" id="content" name="content" type="text"></textarea></div>
    <div id="estimate">
      {[ message ]}
      <span @click="show">Show</span>
      <span v-if="showEstimate">TRUE</span>
      <span v-else="showEstimate">FALSE</span>
    </div>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    <button class="btn btn-danger" type="reset" name="reset">Reset</button>
  </form>
  <script>
  new Vue({
    delimiters: ["{[","]}"],
    data: {
      message: 'Hello Vue',
      showEstimate: false
    },
    methods: {
      show: function () {
        if (this.showEstimate === false) {
          this.showEstimate = true
        } else {
          this.showEstimate = false
        }
      }
    }
  }).$mount('#estimate');

  </script>
@endsection
