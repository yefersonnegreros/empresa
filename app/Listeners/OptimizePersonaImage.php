<?php

// namespace App\Listeners;

// use App\Events\PersonaSaved;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;

// class OptimizePersonaImage
// {
//     /**
//      * Create the event listener.
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Handle the event.
//      */
//     public function handle(PersonaSaved $event): void
//     {
//         //
//     }
// }


namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use App\Events\PersonaSaved;

class OptimizePersonaImage implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PersonaSaved  $event
     * @return void
     */
    public function handle(PersonaSaved $event)
    {
        $persona = $event->persona;

        if ($persona->image) {
            $manager = new ImageManager(new Driver()); // Configurar el manejador de imágenes
            $imagePath = storage_path('app/' . $persona->image);

            // Verificar si el archivo existe
            if (!file_exists($imagePath)) {
                // Manejar el error si el archivo no existe
                return;
            }

            // Leer la imagen
            $image = $manager->read($imagePath);

            // Redimensionar la imagen
            $optimizedImage = $image->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Guardar la imagen optimizada
            Storage::put($persona->image, (string) $optimizedImage->encode('png'));
        }
    }
}