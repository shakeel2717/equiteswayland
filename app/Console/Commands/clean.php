<?php

namespace App\Console\Commands;

use App\Models\admin;
use App\Models\Method;
use App\Models\Option;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starting kit ready';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Shakeel Ahmad';
        $user->username = 'shakeel2717';
        $user->email = 'shakeel2717@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();


        $user = new User();
        $user->name = 'Basharat Ali';
        $user->username = 'basharat604';
        $user->email = 'basharat604@gmail.com';
        $user->refer = 'shakeel2717';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->save();


        $plan = new Plan();
        $plan->name = 'STATER';
        $plan->price = '600';
        $plan->profit = '70';
        $plan->total = '1260';
        $plan->duration = '18';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();

        $plan = new Plan();
        $plan->name = 'STAR';
        $plan->price = '1200';
        $plan->profit = '150';
        $plan->total = '2700';
        $plan->duration = '18';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();

        $plan = new Plan();
        $plan->name = 'BROSLEE';
        $plan->price = '3000';
        $plan->profit = '330';
        $plan->total = '6600';
        $plan->duration = '20';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();

        $plan = new Plan();
        $plan->name = 'BLUE BIRDS';
        $plan->price = '6000';
        $plan->profit = '660';
        $plan->total = '13200';
        $plan->duration = '20';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();

        $plan = new Plan();
        $plan->name = 'DRAGON';
        $plan->price = '12000';
        $plan->profit = '1310';
        $plan->total = '28820';
        $plan->duration = '20';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();

        $plan = new Plan();
        $plan->name = 'DAUGE';
        $plan->price = '25000';
        $plan->profit = '2635';
        $plan->total = '57970';
        $plan->duration = '22';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();


        $plan = new Plan();
        $plan->name = 'OPAL';
        $plan->price = '50000';
        $plan->profit = '5150';
        $plan->total = '118450';
        $plan->duration = '23';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();

        $plan = new Plan();
        $plan->name = 'Business';
        $plan->price = '100000';
        $plan->profit = '10200';
        $plan->total = '244800';
        $plan->duration = '24';
        $plan->withdraw = '100';
        $plan->status = 1;
        $plan->save();


        $method = new Method();
        $method->method = 'bank';
        $method->name = 'Allied Bank Limited';
        $method->number = '02980010079263520012';
        $method->r_number = '03415836208';
        $method->title = 'Qasir Ali ';
        $method->status = 1;
        $method->save();

        $method = new Method();
        $method->method = 'easypaisa';
        $method->name = 'Telenor Micro Finance';
        $method->number = '03415836208';
        $method->r_number = '03415836208';
        $method->title = 'Qasir Ali';
        $method->status = 1;
        $method->save();

        $method = new Method();
        $method->method = 'mobicash';
        $method->name = 'Mobilink Micro Finance';
        $method->number = '03415836208';
        $method->r_number = '03415836208';
        $method->title = 'Qasir Ali';
        $method->status = 1;
        $method->save();


        // inserting website options
        $option = new Option();
        $option->type = 'commission';
        $option->value = 18;
        $option->save();


        // inserting admin
        $admin = new admin();
        $admin->username = "test";
        $admin->password = "test";
        $admin->save();

        return Command::SUCCESS;
    }
}
