<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Nft;
use Illuminate\Http\Request;

class NftController extends Controller
{
  public function store(Nft $nft)
  {
    $request = request()->validate([
      'name' => 'required|min:3|max:40',
      'description' => 'required|min:3|max:40',
      'show' => 'required',
      'collection_id' => 'required',
      'img' => 'required|image',
      'other' => 'image',
    ]);

    $path = 'storage/nft/';
    $pathO = 'storage/other/';
    if (request()->has('img')) {
      $file = request()->file('img');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extension;
      $file->move($path, $filename);
    }
    if (request()->has('other')) {
      $fileO = request()->file('other');
      $extensionO = $fileO->getClientOriginalExtension();
      $filenameO = time() . '.' . $extensionO;
      $fileO->move($pathO, $filenameO);
    }
    $nft = new Nft([
      'name' => $request['name'],
      'description' => $request['description'],
      'img' =>  $path . $filename,
      'other' => $pathO . $filenameO,
      'show' => $request['show']
    ]);
    if ($request['collection_id']) {
      $collection = Collection::findOrFail($request['collection_id']);
      $nft->collection()->associate($collection);
    }
    $nft->user_id = auth()->id();
    $nft->save();
    return redirect()->route('create.listing', $nft->id);
  }
  // public function store(Nft $nft)
  // {
  //   $request = request()->validate([
  //     'name' => 'required|min:2|max:40',
  //     'description' => 'required|min:2|max:40',
  //     'show' => '',
  //     'collection_id' => '',
  //     'img' => 'required|image',
  //     'other' => 'required|image',
  //   ]);

  //   $path = 'storage/nft/';

  //   // Обработка загрузки изображений
  //   $imgNftFileName = null;
  //   $otherImgFileName = null;

  //   if (request()->hasFile('img')) {
  //     $imgNftFile = request()->file('img');
  //     $imgNftFileName = time() . '_' . uniqid() . '.' . $imgNftFile->getClientOriginalExtension();
  //     $imgNftFile->move($path, $imgNftFileName);
  //   }

  //   if (request()->hasFile('other')) {
  //     $otherImgFile = request()->file('other');
  //     $otherImgFileName = time() . '_' . uniqid() . '.' . $otherImgFile->getClientOriginalExtension();
  //     $otherImgFile->move($path, $otherImgFileName);
  //   }
  //   // dd(request()->file('img'));


  //   // Создание записи
  //   $nft = new Nft([
  //     'name' => $request['name'],
  //     'description' => $request['description'],
  //     'img' =>  $path . $imgNftFileName,
  //     'other' => $path . $otherImgFileName,
  //     'show' => $request['show']
  //   ]);

  //   // Проверяем, имеется ли значение для 'img', если нет, выдаем ошибку
  //   if ($nft->img === null) {
  //     return back()->withErrors(['img' => 'Изображение обязательно для загрузки.'])->withInput();
  //   }

  //   // Если collection_id предоставлен, привязать его к записи
  //   if ($request['collection_id']) {
  //     $collection = Collection::findOrFail($request['collection_id']);
  //     $nft->collection()->associate($collection);
  //   }

  //   $nft->save();

  //   return redirect()->route('create.listing', $nft->id)->with('message', 'Идея успешно создана');
  // }
}
