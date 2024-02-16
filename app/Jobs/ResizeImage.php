<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $image_path;

    /**
     * Create a new job instance.
     */
    public function __construct($image_path)
    {
        $this->image_path = $image_path;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Incluir el codigo que deseamos refactorizar, en el curso es sobre Redimensionar imgs pero el package esta fallandy no se pudo instalar

        // Desde el controlador o donde llames el JOB, debes incluir lo siguiente:
        // ResizeImage::dispatch($data['image_path']);
    }
}
