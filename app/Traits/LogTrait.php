<?php

namespace App\Traits;

use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

trait LogTrait
{
    /**
     * Logs the action of the user
     *
     * @param  string $action
     * @param  string $module
     * @return boolean
     */
    private function createLog($action, $module)
    {
        $logModel = Log::create([
            'user_id' => Auth::user()->id,
            'action' => $action,
            'module' => $module,
            'timestamp' => Carbon::now()->format('m/d/Y h:i a')
        ]);

        return ($logModel) ? true : false;
    }
}
