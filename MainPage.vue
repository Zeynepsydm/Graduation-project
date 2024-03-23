<template>
  <h1>The sidebar is{{ collapsed? 'closed':'open' }}</h1>
  <button @click="toggleSidebar">toggle Sidebar</button>
  <div class="row">
    <div class="col-md-6">
   SIGNUPPAGE</div>
  </div>
 
</template>
<script>
import { collapsed, toggleSidebar } from '@/components/sidebar/state'
export default {
  setup() {
      return{ collapsed,toggleSidebar}
  }

};
</script>

<template>
  <bar-chart :chart-data="data"></bar-chart>
</template>

<script>
import { Bar, mixins } from 'vue-chartjs';

export default {
  extends: Bar,
  mixins: [mixins.reactiveProp],
  props: ['chartData'],
  mounted() {
    this.renderChart(this.chartData, { responsive: true, maintainAspectRatio: false });
  }
}
</script>
