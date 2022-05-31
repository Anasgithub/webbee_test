<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

	public function children(){
  		return $this->hasMany( 'App\Models\MenuItem', 'parent_id','id')->with('children');
  		//return $this->hasMany(ProductCategory::class, 'parent_id');
	}
	/*public function grandchildren()
    {
        return $this->children()->with('grandchildren');
    }

	public function parent(){
	  return $this->hasOne( 'App\Models\MenuItem', 'id', 'parent_id' );
	}*/
}
