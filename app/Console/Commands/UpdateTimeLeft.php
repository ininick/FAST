<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Escalation;

class UpdateTimeLeft extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:update-time-left';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk update time left di bagian escalation (task & ticket)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Escalation::all()->each(function ($item) {
            if ($item->parent_type) {
                $this->updateTimeLeftTask($item);
            } else {
                $this->updateTimeLeftTicket($item);
            }

        });

    }
    private function updateTimeLeftTicket($item)
    {
        $timeLeft = $this->calculateTimeLeftTicket($item);
        $item->time_left = $timeLeft;
        $item->save();
    }

    private function updateTimeLeftTask($item)
    {
        $timeLeft = $this->calculateTimeLeftTask($item);
        $item->time_left = $timeLeft;
        $item->save();
    }

    private function calculateTimeLeftTicket($item)
    {
        $created_at = $item->created_at;
        $now = now();

        if ($created_at->diffInDays($now) < 2) {
            return 2 * 24 * 60 * 60; // 2 hari
        } elseif ($created_at->diffInDays($now) < 4) {
            return 2 * 24 * 60 * 60; // 2 hari
        } else {
            return 1 * 24 * 60 * 60; // 1 hari
        }
    }

    private function calculateTimeLeftTask($item)
    {
        $created_at = $item->created_at;
        $now = now();

        if ($created_at->diffInDays($now) < 4) {
            return 4 * 24 * 60 * 60; // 4 hari
        } elseif ($created_at->diffInDays($now) < 8) {
            return 4 * 24 * 60 * 60; // 4 hari
        } else {
            return 2 * 24 * 60 * 60; // 2 hari
        }
    }

}