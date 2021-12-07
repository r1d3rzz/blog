<?php
namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
/*

install composer package : composer require spatie/yaml-front-matter
and use That Package and Change Object Type in BLogs Folder > ...

 */
class Blog {

        public $title;
        public $slug;
        public $intro;
        public $body;

        public function __construct($title,$slug,$intro,$body) {
            $this->title = $title;
            $this->slug = $slug;
            $this->intro = $intro;
            $this->body = $body;
        }

        /*

            use laravel buit in function "collect()->"

            $blogs = collect($files)->map(function($file){

            });

        */

        public static function all(){
            //refractor style

            $blogs = collect( File::files(resource_path("blogs")))->map(function($file){
                $obj=YamlFrontMatter::parseFile($file);
                return new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
            });
            //-----------------------------------------------------------------------------
            // $files = File::files(resource_path("blogs"));

            //collect()->mop();
            // $blogs = collect($files)->map(function($file){
            //     $obj=YamlFrontMatter::parseFile($file);
            //     $blog = new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
            //     return $blog;
            // });
            //------------------------------------------------------------------------------
            //Using Array Map
            // $blogs = array_map(function($file){
            //     $obj=YamlFrontMatter::parseFile($file);
            //     $blog = new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
            //     return $blog;
            // },$files);
            return $blogs;
        }

        public static function find($slug){
            //collet whereFisrt first last ();

            $blogs = static::all();
            return $blogs->firstWhere('slug',$slug);


            // $path = resource_path("blogs/$slug.html");
            // if(!file_exists($path)){
            //     return redirect('/');
            // }
            // return cache()->remember("posts.$slug",now()->addMinutes(3),function() use($path) {
            //     return file_get_contents($path);
            // });
        }
    }
