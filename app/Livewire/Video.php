<?php

namespace App\Livewire;

use Livewire\Component;

class Video extends Component
{
    public $videoBtn = ["Kelas.com", "Kelas.work", "Bootcamp"];
    public $btnSelected = "Kelas.com";
    public $data;

    public function render()
    {
        if ($this->btnSelected == "Kelas.com") {
            $this->data = [
                ['video-title' => 'Public Speaking : Merdeka Dalam Bicara'],
                ['video-title' => 'Public Speaking : Merdeka Dalam Bersuara'],
                ['video-title' => 'Public Speaking : Merdeka Dalam Bicara'],
                ['video-title' => 'Public Speaking : Merdeka Dalam Bicara'],
            ];
        }

        if ($this->btnSelected == "Kelas.work") {
            $this->data = [
                ['video-title' => 'Video dari Kelas.work 1'],
                ['video-title' => 'Video dari Kelas.work 2'],
                ['video-title' => 'Video dari Kelas.work 3'],
            ];
        }

        if ($this->btnSelected == "Bootcamp") {
            $this->data = [
                ['video-title' => 'Video dari Bootcamp 1'],
                ['video-title' => 'Video dari Bootcamp 2'],
                ['video-title' => 'Video dari Bootcamp 3'],
            ];
        }

        return view('livewire.video');
    }

    public function selectBtn($btn)
    {
        $this->btnSelected = $btn;
    }
}
