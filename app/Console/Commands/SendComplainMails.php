<?php

namespace App\Console\Commands;

use App\Jobs\SendComplaintMail;
use Illuminate\Console\Command;

class SendComplainMails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-complain-mails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dispatch(new SendComplaintMail());
    }
}
