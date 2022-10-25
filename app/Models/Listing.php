<?php
    namespace App\Models;
    
    class Listing{
        public static function all(){
            return [
                [
                    'id'=>1,
                    'title'=>'Listing One',
                    'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Exercitationem ea ullam vel quas provident odio facilis suscipit. 
                    Ex quasi nihil esse tempora, dolorum natus, iusto, 
                    beatae quidem quisquam consectetur enim?'
                ],
                [
                    'id'=>2,
                    'title'=>'Listing Two',
                    'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Exercitationem ea ullam vel quas provident odio facilis suscipit. 
                    Ex quasi nihil esse tempora, dolorum natus, iusto, 
                    beatae quidem quisquam consectetur enim?'
                ]
            ];
        }

        public static function find($id){
            $listings=self::all();

            foreach($listings as $listing){
                if($listing['id']==$id){
                    return listing;
                }
            }
        }
    }