<?php

namespace MayIFit\Core\Translation\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use MayIFit\Core\Translation\Models\Translation;
use MayIFit\Core\Translation\Http\Resources\TranslationCollection;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->name) {
            $translations = LanguageLine::where('group', 'LIKE', '%'.$request->name.'%')
                ->orWhere('key', 'LIKE', '%'.$request->name.'%')
                ->orWhere('text', 'LIKE', '%'.$request->name.'%')
                ->paginate(15);
        } else {
            $translations = LanguageLine::paginate(15);
        }
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
        $languageLine = new LanguageLine();
        $languageLine->text = [$request->language => $request->value];
        $languageLine->group = $request->group;
        $languageLine->key = $request->key;
        $languageLine->save();
        return new TranslationCollection($languageLine);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LanguageLine  $languageLine
     * @return \Illuminate\Http\Response
     */
    public function show(LanguageLine $languageLine)
    {
        return new TranslationCollection($languageLine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LanguageLine  $languageLine
     * @return \Illuminate\Http\Response
     */
    public function edit(LanguageLine $languageLine)
    {
        return false;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LanguageLine  $languageLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LanguageLine $languageLine)
    {
        $lineText = array();
        foreach ($request->language as $key => $value) {
            if (trim($request->value[$key])) {
                $lineText[$value] = $request->value[$key];
            }
        }
        
        $languageLine->text = $lineText;
        $languageLine->group = $request->group;
        $languageLine->key = $request->key;
        $languageLine->save();
        return new TranslationCollection($languageLine);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LanguageLine  $languageLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(LanguageLine $languageLine)
    {
        $languageLine->delete();
        return new TranslationCollection($languageLine);
    }
}
