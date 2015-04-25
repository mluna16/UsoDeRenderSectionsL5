<?php namespace UsoDeRenderSectionsL5\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use UsoDeRenderSectionsL5\Http\Requests;
use UsoDeRenderSectionsL5\Http\Controllers\Controller;

use Illuminate\Http\Request;
use UsoDeRenderSectionsL5\Image;
use Faker\Factory as Faker;


class ImageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
	public function index(Request $request)
	{
        $image = Image::all();
        $view = View::make('renderSections')->with('images',$image);
        if($request->ajax()){
            //Aqui se hace el RenderSections, esto si y solo si la solicitud es de tipo ajax
            $sections = $view->renderSections();

            return Response::json($sections['contentPanel']); // se envie el sections con un formato json

        }else return $view;

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $faker = Faker::create();
        $image = new Image;
        $image->imagesUrl = $faker->imageUrl($width = 171, $height = 180, 'cats');


        if($image->save()) return Response::json('ok',200);
        else return Response::json('error',500);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $image = Image::findOrFail($id);
        if($image->delete()) return Response::json('ok',200);
        else return Response::json('error',500);
	}

}
