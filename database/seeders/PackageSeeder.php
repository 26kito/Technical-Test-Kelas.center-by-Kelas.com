<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\PackageFeature;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $packages = [
            [
                'title' => 'Starter',
                'price' => 187500,
                'monthly_payment' => 159000,
            ],
            [
                'title' => 'Basic',
                'price' => 187500,
                'monthly_payment' => 159000,
            ],
            [
                'title' => 'Pro',
                'price' => 3750000,
                'monthly_payment' => 2900000,
            ],
        ];

        foreach ($packages as $packageData) {
            $package = Package::create($packageData);

            // Define features for each package
            if ($package->title == 'Starter') {
                $features = [
                    'LMS + kelas by Kelas.Center',
                    'Up to 5 users',
                    'No charge per user',
                    'Up to 20 pilihan kelas',
                    'Update pergantian kelas / 3 bulan',
                    'Sertifikat',
                    'Konsultasi Gratis',
                    'Dedicated assistant',
                    'Full support 7x24 jam',
                ];
            } elseif ($package->title == 'Basic') {
                $features = [
                    'LMS + kelas by Kelas.Center',
                    '6-49 users',
                    'No charge per user',
                    'Up to 50 pilihan kelas',
                    'Update pergantian kelas / 3 bulan',
                    'Sertifikat',
                    'Konsultasi Gratis',
                    'Dedicated assistant',
                    'Full support 7x24 jam',
                ];
            } elseif ($package->title == 'Pro') {
                $features = [
                    'LMS + kelas by Kelas.Center',
                    '50-100 users',
                    'No charge per user',
                    'All Access Class',
                    'Update pergantian kelas / 3 bulan',
                    'Sertifikat',
                    'Konsultasi Gratis',
                    'Dedicated assistant',
                    'Full support 7x24 jam',
                ];
            }

            foreach ($features as $feature) {
                PackageFeature::create([
                    'package_id' => $package->id,
                    'feature' => $feature,
                ]);
            }
        }
    }
}
