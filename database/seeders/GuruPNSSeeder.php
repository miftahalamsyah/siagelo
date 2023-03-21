<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\GuruPNS;

class GuruPNSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Miftah Rizky Alamsyah';
        $user->level = 'guru_pns';
        $user->email = 'miftahrizkyalamsyah@upi.edu';
        $user->password  = 'miftahmiftah';
        $user->save();

        $pns = new GuruPNS();
        $pns->id_user = $user->id;
        $pns->nim = '2004561';
        $pns->alamat = 'Batujajar';
        $pns->no_hp = '089634953186';
        $pns->save();
    }
}
