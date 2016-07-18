<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = array(
            0 => array(
                "titulo" => "Titulo do post 4",
                "data" => date('d/m/Y, H:i:s', strtotime("-1 days")),
                "resumo" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at urna suscipit, vehicula turpis in, 
                             pulvinar elit. Nullam gravida ut magna a vestibulum. Nullam quis nulla enim. Fusce a vulputate ex, 
                             eget commodo tellus. Pellentesque nisl neque, sollicitudin non libero sit amet, accumsan tincidunt 
                             diam. Maecenas tempus nisl neque, eu ornare urna laoreet eget. Aliquam ex turpis, aliquet porttitor 
                             neque ut, fringilla eleifend lectus...',
            ),
            1 => array(
                "titulo" => "Titulo do post 3",
                "data" => date('d/m/Y, H:i:s', strtotime("-2 days")),
                "resumo" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at urna suscipit, vehicula turpis in, 
                             pulvinar elit. Nullam gravida ut magna a vestibulum. Nullam quis nulla enim. Fusce a vulputate ex, 
                             eget commodo tellus. Pellentesque nisl neque, sollicitudin non libero sit amet, accumsan tincidunt 
                             diam. Maecenas tempus nisl neque, eu ornare urna laoreet eget. Aliquam ex turpis, aliquet porttitor 
                             neque ut, fringilla eleifend lectus...',
            ),
            2 => array(
                "titulo" => "Titulo do post 2",
                "data" => date('d/m/Y, H:i:s', strtotime("-3 days")),
                "resumo" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at urna suscipit, vehicula turpis in, 
                             pulvinar elit. Nullam gravida ut magna a vestibulum. Nullam quis nulla enim. Fusce a vulputate ex, 
                             eget commodo tellus. Pellentesque nisl neque, sollicitudin non libero sit amet, accumsan tincidunt 
                             diam. Maecenas tempus nisl neque, eu ornare urna laoreet eget. Aliquam ex turpis, aliquet porttitor 
                             neque ut, fringilla eleifend lectus...',
            ),
            3 => array(
                "titulo" => "Titulo do post 1",
                "data" => date('d/m/Y H:i:s', strtotime("-4 days")),
                "resumo" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at urna suscipit, vehicula turpis in, 
                             pulvinar elit. Nullam gravida ut magna a vestibulum. Nullam quis nulla enim. Fusce a vulputate ex, 
                             eget commodo tellus. Pellentesque nisl neque, sollicitudin non libero sit amet, accumsan tincidunt 
                             diam. Maecenas tempus nisl neque, eu ornare urna laoreet eget. Aliquam ex turpis, aliquet porttitor 
                             neque ut, fringilla eleifend lectus...',
            ),
        );

        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
