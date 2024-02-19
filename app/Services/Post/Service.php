<?php


namespace App\Services\Post;


use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data) {

        try {
            DB::beginTransaction();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);

            $data['preview_image'] = Storage::disk('public')->put('images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('images', $data['main_image']);

            $post = Post::firstOrCreate($data);

            $post->tags()->attach($tagIds);


            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(404);
        }


    }

    public function update($post, $data) {

        try {
            DB::beginTransaction();

            $tagIds = $data['tag_ids'];
            unset($data['tag_ids']);


            $data['preview_image'] = Storage::disk('public')->put('images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('images', $data['main_image']);

            $post->update($data);
            $post->tags()->sync($tagIds);

            return $post;
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }






    }
}
