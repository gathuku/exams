<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Notifications\MarkEntered;

class QueueNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $user;
    public $value;
    public function __construct($user,$value)
    {
        $this->user=$user;
        $this->value=$value;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      \Notification::route('mail',$this->user)
                   ->notify(new MarkEntered($this->value));
    }
}
