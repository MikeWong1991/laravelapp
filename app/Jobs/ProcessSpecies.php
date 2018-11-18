<?php

namespace App\Jobs;
use App\Species;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessSpecies implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $nameSpecies;
    private $classification;
    private $avarageHeight;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($species)
    {
        $this->nameSpecies = $species->name;
        $this->classification = $species->classification;
        $this->avarageHeight = $species->average_height;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Species $speciesInstance)
    {
      $speciesInstance->fill(['name' => $this->nameSpecies, 'classification' => $this->classification, 'average_height' => $this->avarageHeight]);
      $speciesInstance->save();

    }
}
