<?php

namespace App\Livewire;

use App\Models\Package;
use Livewire\Component;

class PackagePrice extends Component
{
    public $package;

    public function render()
    {
        $this->package = Package::with('features')->get();
        foreach ($this->package as $row) {
            $row['price'] = $this->rupiah($row['price']);
            $row['monthly_payment'] = $this->rupiah($row['monthly_payment']);
        }

        return view('livewire.package-price');
    }

    private function rupiah($num)
    {
        $result = 'Rp' . number_format($num, 0, ',', '.');

        return $result;
    }
}
