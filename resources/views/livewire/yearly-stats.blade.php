<div wire:ignore class="py-12 mt-10" x-data= "{
year: @entangle('year').live,
 keys: @entangle('orderKeys').live, 
 values: @entangle('orderValues').live
 } " x-init= "

chart = new Chart($refs=chart, {    
type: 'line',
data: {
labels: keys,
datasets: [{
  label: '# of Orders',
  data: values,
  borderWidth: 1
}]
},
options: {
  maintainAspectRatio: true,
scales: {
  y: {
  beginAtZero: true
  }
}
}
});
Livewire.on('updateChart', () => {
    chart.data.datasets[0].data = values;
    chart.data.labels = keys;
    chart.update();
})
">
<div class="my-6">
    {{-- {{   dd( $this->orderValues,$this->orderKeys ) }} --}}
   <span x-text="year"></span> <span x-text="values.reduce((a, b) => a + b, 0)"></span>
</div>
<span x-text="year"></span>
    <select name="year" id="year" wire:model.live = "year" wire:change="selectedYear">
        @foreach ($activeYears as $year)
            <option value={{ $year }}> {{$year}}</option>
        @endforeach
    </select>
<div class="bg-green-200">
    <canvas id="chart" x-ref ="chart"></canvas>
</div>  
</div>
@if (session('alert'))
    <script>
        alert("{{ session('alert') }}");

    </script>
@endif