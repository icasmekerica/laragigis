<?php

namespace App\Models;

class Listing {

    public static function all(){
        return [ 
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nisi commodo, aliquet nisl in, venenatis turpis.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nisi commodo, aliquet nisl in, venenatis turpis.'
            ]
           
            ];
        
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }

        }

    }

}

?>