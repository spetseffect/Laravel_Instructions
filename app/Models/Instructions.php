<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Instructions extends Model
{
    use HasFactory;

    public function index(){
        $result=DB::table('instructions')
            ->join('users','users.id','=','instructions.author_id')
            ->join('statuses','statuses.id','=','instructions.status')
            ->join('devices','devices.id','=','instructions.device_id')
            ->select([
                'instructions.id as id',
                'instructions.name as name',
                'statuses.name as status',
                'users.name as author',
                'instructions.updated_at as updated',
                'devices.name as device',
                'instructions.filename as file'
            ])
            ->get();
        return $result;
    }
    public function search($string){
        $result=DB::table('instructions')
            ->join('users','users.id','=','instructions.author_id')
            ->join('statuses','statuses.id','=','instructions.status')
            ->join('devices','devices.id','=','instructions.device_id')
            ->where('instructions.name','like','%'.$string.'%')
            ->orWhere('devices.name','like','%'.$string.'%')
            ->select([
                'instructions.id as id',
                'instructions.name as name',
                'statuses.name as status',
                'users.name as author',
                'instructions.updated_at as updated',
                'devices.name as device',
                'instructions.filename as file'
            ])
            ->get();
        return $result;
    }
//    public function store(Instructions $instructions){
//        DB::table('instructions')->insert([
//
//        ]);
//    }

//    protected $fillable = [
//        'id',
//        'name',
//        'description',
//        'filename',
//        'status',
//        'authorId',
//        'updated_at',
//        'device_id'
//    ];
}
