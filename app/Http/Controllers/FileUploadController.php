<?php

namespace App\Http\Controllers;

use App\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class FileUploadController extends Controller
{


    public function fileUpload(Request $request){

        // initialised 
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

        // if not uploaded
        if(!$receiver->isUploaded()){
            return redirect()->back()->with('error', 'Check your internet connection');
        }

        $fileReceived = $receiver->receive();
        
        if($fileReceived->isFinished()){
            
            // uploaded file
            $file = $fileReceived->getFile();

            // file extension
            $fileExtension = $file->getClientOriginalExtension();

            // $filename = str_replace('testing'. $fileExtension);

            $storage = Storage::disk(config('filesystems.default'));
            $path = $storage->putFileAs('videos', $file, 'testing.mp4');

            // delete chunked files
            unlink($file->getPathname());
            return [
                'path' => asset('storage/' . $path),
                'filename' => 'testing.mp4'
            ];
        }

        $handler = $fileReceived->handler();
        return [
            'done' => $handler->getPercentageDone(),
            'status' => true
        ];
    }

    public function store(Request $request)
    {
        // Validasi file yang diunggah
        $request->validate([
            'file' => 'required|file|max:102400', // Maksimal ukuran 100MB
        ]);

        // Dapatkan file yang diunggah
        $file = $request->file('file');

        // Dapatkan nama file asli
        $filename = $file->getClientOriginalName();

        // Simpan file ke storage (default: storage/app/public/uploads)
        $filePath = $file->storeAs('uploads', $filename, 'public');

        // Mengembalikan respons dengan pesan sukses
        return back()
            ->with('success', 'File berhasil diunggah!')
            ->with('file', $filePath);
    }
}
