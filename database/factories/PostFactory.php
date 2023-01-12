<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $id = rand(30,300);
        // $image = "https://i.picsum.photos/id/".$id."/648/480.jpg";
        // return [
        //     'title' => $this->faker->sentence(),
        //     'slug' => Str::slug($this->faker->sentence()),
        //     'image' => $image,
        //     'description'=>$this->faker->text(400),
        //     'category_id'=>function(){
        //         return Category::inRandomOrder()->first()->id;
        //     },
        //     'user_id' => 1,
        // ];
    }
}
