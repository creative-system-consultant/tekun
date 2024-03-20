<?php

namespace App\Jobs;

use App\Models\AccountMaster;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ExportAccountMasterData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $fileName = 'export-' . now()->format('Y-m-d-H-i-s') . '.csv';
        $filePath = 'public/' . $fileName; // This path is within the "storage/app" directory.

        $handle = fopen(Storage::path($filePath), 'w');
        fputcsv($handle, ['ACTID', 'ACCOUNT_NO', 'APPROVED_DATE']); // Replace with actual column names

        AccountMaster::query()
            ->chunkById(1000, function ($accounts) use ($handle) {
                foreach ($accounts as $account) {
                    fputcsv($handle, [$account->ACTID, $account->ACCOUNT_NO, $account->APPROVED_DATE]); // Adapt based on actual data
                }
            });

        fclose($handle);

    }
}
