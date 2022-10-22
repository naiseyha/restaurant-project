<?php

namespace App\Http\Controllers\Admin;
use App\Helpers\UploadHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Support\Facades\Storage;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $categories = Category::all();
        return view('admin.menus.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' =>'required|string|max:255|min:2',
            'description' =>'nullable|max:500',
        ],
    [
        'name.required' => 'Pleas, give name categories !',
        'description.required' => 'Pleas , give description'

    ]);


     $categories = new Category ();
     $categories-> name = $request->name;
     $categories-> description = $request->description;
     $categories-> image = $request->image;
     $categories->save();

     if($request->file('image')){
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('images/Categories'), $filename);
        $categories['image']= $filename;
    }
        $categories->save();


    session()->flash('success', 'Product has been created !');
    return back();


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
    public function update(Request $request, $id )
    {

        $user = Category::find($id);

         if (!is_null($user)) {


        $user->name = $request->name;
        $user->description = $request->description;
        $user->save();

        if ($request->image) {
            // Delete the previous image stored & Upload this image
            $imageName = UploadHelper::update($request->image, 'user-' . $user->id, 'images/Categories', $user->image);

            $user->image = $imageName;
            $user->save();
        }

        session()->flash('success', 'User has been updated !');
    } else {
        session()->flash('error', 'Sorry ! No User has been found !');
    }
    return back();
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Category::find($id);
        if (!is_null($user)) {
            // First Delete User Image & then Delete the user
            $image_path = public_path().'/images/Categories/'.$user->image;
            unlink($image_path);
            $user->delete();

            session()->flash('success', 'Category has been deleted !');
        } else {
            session()->flash('error', 'Sorry ! No Category has been found !');
        }
        return back();
    }

}
