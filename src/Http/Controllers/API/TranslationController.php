<?php

namespace MayIFit\Core\Translation\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use MayIFit\Core\Translation\Models\Translation;
use MayIFit\Core\Translation\Http\Collections\TranslationCollection;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchTerm = $request->input('name');
        $translations = Translation::when($searchTerm, function($q) use ($searchTerm) {
            $q->where('group', 'LIKE', '%'.$searchTerm.'%')
                ->orWhere('key', 'LIKE', '%'.$searchTerm.'%')
                ->orWhere('text', 'LIKE', '%'.$searchTerm.'%');
        })->paginate(15);
        return new TranslationCollection($translations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return false;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $translation = new Translation();
        $translation->text = [$request->language => $request->value];
        $translation->group = $request->group;
        $translation->key = $request->key;
        $translation->save();
        return new TranslationCollection($translation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function show(Translation $translation)
    {
        return new TranslationCollection($translation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function edit(Translation $translation)
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Translation $translation)
    {
        $lineText = array();
        foreach ($request->language as $key => $value) {
            if (trim($request->value[$key])) {
                $lineText[$value] = $request->value[$key];
            }
        }
        
        $translation->text = $lineText;
        $translation->group = $request->group;
        $translation->key = $request->key;
        $translation->save();
        return new TranslationCollection($translation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \MayIFit\Core\Translation\Models\Translation  $translation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Translation $translation)
    {
        $translation->delete();
        return new TranslationCollection($translation);
    }
}
