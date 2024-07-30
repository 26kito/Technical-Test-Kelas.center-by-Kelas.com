<?php

namespace App\Livewire;

use Livewire\Component;

class Benefit extends Component
{
    public $benefitBtn = ["LMS", "Featured", "Video Learning + Live Webinar", "Inquiry Learning"];
    public $btnSelected = "LMS";
    public $benefitContent;

    public function render()
    {
        if ($this->btnSelected == "LMS") {
            $this->benefitContent = [
                'title' => 'Optimalkan potensi karyawan Anda dengan Learning Management System (LMS)',
                'info' => 'Berdayakan tim Anda untuk mencapai kesuksesan dengan data yang akurat dan solusi pembelajaran yang
                            terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan produktivitas yang
                            unggul dengan LMS kami!',
                'point' => [
                    [
                        'title' => 'Issued Certificate',
                        'content' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.'
                    ],
                    [
                        'title' => 'Training on-demand',
                        'content' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.'
                    ],
                ]
            ];
        }

        if ($this->btnSelected == "Featured") {
            $this->benefitContent = [
                'title' => 'Judul Konten Featured',
                'info' => 'Isi konten featured',
                'point' => [
                    [
                        'title' => 'Issued Certificate',
                        'content' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.'
                    ],
                    [
                        'title' => 'Training on-demand',
                        'content' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.'
                    ],
                ]
            ];
        }

        if ($this->btnSelected == "Video Learning + Live Webinar") {
            $this->benefitContent = [
                'title' => 'Judul Konten Video Learning + Live Webinar',
                'info' => 'Isi konten Video Learning + Live Webinar',
                'point' => [
                    [
                        'title' => 'Issued Certificate',
                        'content' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.'
                    ],
                    [
                        'title' => 'Training on-demand',
                        'content' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.'
                    ],
                ]
            ];
        }

        if ($this->btnSelected == "Inquiry Learning") {
            $this->benefitContent = [
                'title' => 'Judul Konten Inquiry Learning',
                'info' => 'Isi konten Inquiry Learning',
                'point' => [
                    [
                        'title' => 'Issued Certificate',
                        'content' => 'Berikan kemudahan dalam mengatur dan mendistribusikan sertifikat kepada setiap karyawan.'
                    ],
                    [
                        'title' => 'Training on-demand',
                        'content' => 'Training On-Demand yang berfokus pada pengalaman pengguna, pelatihan berkualitas tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan Anda.'
                    ],
                ]
            ];
        }

        return view('livewire.benefit');
    }

    public function selectBtn($btn)
    {
        $this->btnSelected = $btn;
    }
}
