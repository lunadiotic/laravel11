<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = DB::table('categories')->get();
        // $categories = DB::table('categories')->select(['id', 'name', 'slug'])->get();
        // $categories = DB::table('categories')->whereIn('id', [1, 3, 5])->get();
        // $categories = DB::table('categories')
        //     ->where('id', 1)
        //     ->select(['id', 'name', 'slug'])->first();

        $categories = Category::all();
        // $categories = Category::select(['id', 'name', 'slug'])->get();
        // $categories = Category::whereIn('id', [1, 3, 5])
        //     ->select(['id', 'name', 'slug'])
        //     ->get();
        // $categories = Category::where('id', 1)
        //     ->select(['id', 'name', 'slug'])
        //     ->first();


        return $categories;
    }

    public function store(Request $request)
    {
        // $category = DB::table('categories')->insert([
        //     'name' => $request['name'],
        //     'slug' => Str::of($request['name'])->slug('-'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // $categories = DB::table('categories')->insert([
        //     ['name' => 'Komedi', 'slug' => Str::of('komedi')->slug('-')],
        //     ['name' => 'Drama Jepang', 'slug' => Str::of('Drama Jepang')->slug('-')],
        //     ['name' => 'Drama Korea', 'slug' => Str::of('Drama Korea')->slug('-')],
        // ]);

        // $category = new Category();

        // $category->name = $request['name'];
        // $category->slug = Str::of($request['name'])->slug('-');

        // $category->save();

        // $category = Category::create([
        //     'name' => $request['name'],
        //     'slug' => Str::of($request['name'])->slug('-'),
        // ]);

        $categories = Category::insert([
            ['name' => 'Komedi 123', 'slug' => Str::of('komedi 123')->slug('-')],
            ['name' => 'Drama Jepang 123', 'slug' => Str::of('Drama Jepang 123')->slug('-')],
        ]);

        return $categories;
    }

    public function update(Request $request, $id)
    {
        // $category = DB::table('categories')->where('id', $id)->update([
        //     'name' => $request['name'],
        //     'slug' => Str::of($request['name'])->slug('-'),
        //     'updated_at' => now(),
        // ]);

        // $category = Category::find($id);
        // if ($category) {
        //     $category->name = $request['name'];
        //     $category->slug = Str::of($request['name'])->slug('-');
        //     $category->save();
        // }

        $category = Category::where('id', $id)->update([
            'name' => $request['name'],
            'slug' => Str::of($request['name'])->slug('-'),
            'updated_at' => now(),
        ]);

        return $category;
    }

    public function destroy($id)
    {
        // DB::table('categories')->where('id', $id)->delete();

        // $category = Category::find($id);
        // if ($category) {
        //     $category->delete();
        // }

        Category::destroy($id);

        return true;
    }
}
