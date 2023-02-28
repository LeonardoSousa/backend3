<?php

namespace App\Jobs;

use App\Actions\ProcessaRetornoAction;
use App\Models\Retorno;
use App\Services\RetornoService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Storage;

class JobProcessaRetorno implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     */
    public function __construct(public Retorno $retorno)
    {
       
    }

    /**
     * Execute the job.
     */
    
    public function handle(): void
    {
        ProcessaRetornoAction::run($this->retorno);
    }

    public function fail($exception = null)
    {
        $this->retorno->update(['STATUS' => 'FALHA']);
    }
}
