<?php

// use Illuminate\Database\Seeder;
// use App\Apartment;
// use App\Sponsor;
// use App\SponsorApartment;
// use Faker\Generator as Faker;
//
// class SponsorApartmentsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run(Faker $faker)
//     {
//         $apartmentCount = count(Apartment::all()->toArray()) - 1;
//         $sponsorCount = count(Sponsor::all()->toArray()) - 1;
//
//         for ($i=0; $i < $apartmentCount; $i++) {
//             $newSponsorApartment = new SponsorApartment;
//             $newSponsorApartment->apartment_id = rand(1,$apartmentCount);
//             $newSponsorApartment->sponsor_id = rand(1,$sponsorCount);
//             $newSponsorApartment->data_inizio = $faker->dateTime();
//             $sponsor = Sponsor::find($newSponsorApartment->sponsor_id);
//             $sponsorDurata = $sponsor->durata;
//             $newSponsorApartment->data_fine = $newSponsorApartment->data_inizio + $sponsorDurata;
//
//             $newSponsorApartment->save();


        }
    }
}
