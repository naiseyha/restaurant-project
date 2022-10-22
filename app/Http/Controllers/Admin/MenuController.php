<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\MenuStoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Helpers\UploadHelper;
use App\Http\Requests\CategoryStoreRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$categories = Category::all();
$menus = Menu::all();

        return view('backend.admin.menus.index', compact('menus','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::all();
        // return view('backend.admin.menus.Create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {


        // $menu = Menu::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'image' => $image,
        //     'price' => $request->price
        // ]);


        $menu = new Menu ();
        $menu-> name = $request->name;
        $menu-> description = $request->description;
        $menu-> image = $request->image;
        $menu-> price = $request->price;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/Menu'), $filename);
            $menu['image']= $filename;
        }
          $menu->save();


        if ($request->has('categories')) {
            $menu->categories()->attach($request->categories);
        }

        session()->flash('success', 'Menus has been to create !');
        return back();

        // return redirect()->route('admin.menus.index');

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
    public function update(Request $request ,Menu $menu)

    {


       if (!is_null($menu)) {
       $menu->name = $request->name;
       $menu->description = $request->description;
       $menu->price = $request->price;
       $menu->save();

       if ($request->image) {
           // Delete the previous image stored & Upload this image
           $imageName = UploadHelper::update($request->image, 'user-' . $menu->id, 'images/Menu', $menu->image);
           $menu->image = $imageName;
           $menu->save();
      }


     if ($request->has('categories')) {
      $menu->categories()->sync($request->categories);
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


        $user = Menu::find($id);
        if (!is_null($user)) {
            // First Delete User Image & then Delete the user
            $image_path = public_path().'/images/Menu/'.$user->image;
            unlink($image_path);
            $user->delete();



         session()->flash('success', 'Category has been deleted !');
        } else {
         session()->flash('error', 'Sorry ! No Category has been found !');
        }
        return back();
    }

    }



