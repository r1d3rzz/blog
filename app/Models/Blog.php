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

        public static function all(){
            $files = File::files(resource_path("blogs"));
            $blogs = [];
            foreach($files as $file){
                $obj=YamlFrontMatter::parseFile($file);
                $blog = new Blog($obj->title,$obj->slug,$obj->intro,$obj->body());
                $blogs[]=$blog;
            }
            return $blogs;

            // return array_map(function($file){
            //     return $file->getContents();
            // },$files);
        }

        public static function find($slug){
            $path = resource_path("blogs/$slug.html");
            if(!file_exists($path)){
                return redirect('/');
            }
            return cache()->remember("posts.$slug",now()->addMinutes(3),function() use($path) {
                return file_get_contents($path);
            });
        }
    }
