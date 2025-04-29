<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Orders;
use Livewire\Component;



class YearlyStats extends Component
{
    public $year;
    public $orderValues;
    public $orderKeys;
    public $activeYears;

    public function mount() {
        $currentYear = Carbon::now()->year;
        if(request()->year <= 2019  || request()->year > $currentYear){
            session()->flash('alert', 'Data ranges from 2020 to ' . $currentYear);
        }elseif (request()->year) {
            $this->year = request()->year;
        }else { 
            $this->year = Carbon::now()->year;
        }
        $this->selectedYear();

        
    }

    public function selectedYear() {


        $years = Orders::select('created_at')->orderBy('created_at', 'asc')->get();
        $years = collect($years);
        $this->activeYears = $years->map(function ($dates){
            $date  = json_decode($dates, true); 
                return Carbon::parse($date['created_at'])->year;
        })->unique()->toArray();
      


        $order = Orders::select('created_at', 'orders')->whereYear('created_at', $this->year)->limit(15)->orderBy('created_at', 'asc')->get();
        $orders = $order->mapWithKeys(function($order) {
        $date = $order['created_at']->format('Y-m-d');
            $order = collect($order);
         return [$date => $order['orders']];
        });
        $this->orderValues = $orders->values()->toArray();
        $this->orderKeys = $orders->keys();
         $this->dispatch('updateChart');
    }



    public function render()
    {   
        return view('livewire.yearly-stats');
    }
}
