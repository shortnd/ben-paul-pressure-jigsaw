---
title: Estimate
---
@extends('_layouts.inner')
@section('body')
  @verbatim
    <div id="estimate-section">
      <label for="length">Length: <sub>in feet</sub> </label>
      <input type="number" v-model="estimate.length" class="form-control" name="length" id="length">
      <label for="width">Width: <sub>in feet</sub></label>
      <input type="number" v-model="estimate.width" class="form-control" name="width" id="width">
      <h2>Percentage: <span>{{ estimate.percentage * 100 }}% ~ {{ estimate.highPercentage * 100 }}%</span></h2>
      <sub>* Percentage may vary depending on job and equipment needed.</sub>
      <h2>Estimated Totals: <span>${{ round(realTotal) }} ~ ${{ round(highTotal) }}</span></h2>
    </div><!--/#estimate-section-->
  @endverbatim
<script>
  new Vue({
    data: {
      estimate: {
        length: 0,
        width: 0,
        percentage: {{ $page->percentage }},
        highPercentage: {{ $page->highPercentage }},
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
  }).$mount('#estimate-section');
</script>
@endsection
