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
      <span @click="show">@{{ message }}</span>
      <div v-if="showEstimate" class="estimate">
        <label for="length">Length: <sub>In feet</sub> <input class="form-control" type="number" name="length" id="length" v-model.number="estimate.length" placeholder="0" /></label>
        <label for="width">Width: <sub>In feet</sub> <input class="form-control" type="number" name="width" id="width" v-model.number="estimate.width" placeholder="0" /></label>
        <br>
        <label for="Percentage">Percentage: @{{ estimate.percentage * 100}}% ~ @{{ estimate.highPercentage * 100 }}%</label>
        <br>
        <sub>* Percentage may vary depending on job and equipment needed</sub>
        <br>
        <h3>Estimated Total: $@{{ round(realTotal) }} ~ $@{{ round(highTotal) }}</h3>
      </div><!--/.estimate-->
    </div><!--/#estimate-->
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    <button class="btn btn-danger" type="reset" name="reset">Reset</button>
  </form>
  <script>
  new Vue({
    data: {
      message: 'Show Estimate Calculator +',
      showEstimate: false,
      estimate : {
        length: 0,
        width: 0,
        percentage: .45,
        highPercentage: .60,
      }
    },
    computed: {
      realTotal: function () {
        return (this.estimate.length * this.estimate.width) * this.estimate.percentage
      },
      highTotal: function () {
        return (this.estimate.length * this.estimate.width) * this.estimate.highPercentage
      }
    },
    methods: {
      show: function () {
        if (this.showEstimate === false) {
          this.showEstimate = true
          this.message = 'Hide Estimate Calculator -'
        } else {
          this.showEstimate = false
          this.message = 'Show Estimate Calculator +'
        }
      },
      round: function(value) {
        var amount = Math.floor(value * 100) / 100;
        return amount.toFixed(2)
      }
    }
  }).$mount('#estimate');

  </script>
@endsection
