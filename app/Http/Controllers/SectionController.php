<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num=1;
        $sections = Section::where('id', '=', '1')->firstOrFail();
        return view('admin.sections.index', compact( 'sections', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editFirst($id) {
        $section = Section::where('id', $id)->firstOrFail();
        return view('admin.sections.first', compact('section'));
    }

    public function editSecond($id) {
        $section = Section::where('id', $id)->firstOrFail();
        return view('admin.sections.second', compact('section'));
    }

    public function editThird($id) {
        $section = Section::where('id', $id)->firstOrFail();
        return view('admin.sections.third', compact('section'));
    }

    public function editFourth($id) {
        $section = Section::where('id', $id)->firstOrFail();
        return view('admin.sections.fourth', compact('section'));
    }

    public function editLegal($id) {
        $section = Section::where('id', $id)->firstOrFail();
        return view('admin.sections.legal', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $section = Section::where('id', $id)->firstOrFail();

        $section->fill($request->all())->save();

        if ($section) {
            return redirect()->route('secciones.index', ['id' => $id])->with(['type' => 'success', 'title' => 'Edición exitosa', 'msg' => 'La Sección ha sido editada exitosamente.']);
        } else {
            return redirect()->route('secciones.edit', ['id' => $id])->with(['type' => 'error', 'title' => 'Edición fallida', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.']);
        }
    }

}
