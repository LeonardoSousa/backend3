<?php

namespace App\Observers;

use App\Jobs\JobProcessaRetorno;
use App\Models\Retorno;
use App\Services\PusherService;

class RetornoObserver
{
    public $afterCommit = false;
    /**
     * Handle the Retorno "created" event.
     */
    public function created(Retorno $retorno): void
    {
        info("CREATED RETORNO");
        JobProcessaRetorno::dispatch($retorno);
    }

    /**
     * Handle the Retorno "updated" event.
     */
    public function updated(Retorno $retorno): void
    {
        if($retorno->wasChanged('status')) {
            info("UPDATED RETORNO STATUS". $retorno->status);
            PusherService::trigger('retorno', 'updated-status', $retorno->toJson());
        }

        if($retorno->wasChanged('progress')) {
            info("UPDATED RETORNO PROGRESS". $retorno->status);
        }
        PusherService::trigger('retorno', 'updated-status', $retorno->toJson());
    }

    /**
     * Handle the Retorno "deleted" event.
     */
    public function deleted(Retorno $retorno): void
    {
        //
    }

    /**
     * Handle the Retorno "restored" event.
     */
    public function restored(Retorno $retorno): void
    {
        //
    }

    /**
     * Handle the Retorno "force deleted" event.
     */
    public function forceDeleted(Retorno $retorno): void
    {
        //
    }
}
