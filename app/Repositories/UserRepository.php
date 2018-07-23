<?php

    namespace App\Repositories;

    use App\Repositories\UserInterface as UserInterface;

    use App\User;
    use Illuminate\Database\Eloquent\ModelNotFoundException;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Storage;


    class UserRepository implements UserInterface

    {

        public $user;

        function __construct(User $user) {
            $this->user = $user;
        }

        function getAll(){
            return $this->user::all();
        }

        function getGender(){

            return Auth::user()->sex;
        }

        public function updateName($request)
        {
            try{
                //Find the user object from model if it exists
                DB::table('t_user')
                    ->where('id', $request['id'])
                    ->update([ 'name' =>$request['name'] ]);

            }
            catch(ModelNotFoundException $err){
                //Show error page
            }
        }

        public function updateFamilyname($request)
        {
            try{
                //Find the user object from model if it exists
                DB::table('t_user')
                    ->where('id', $request['id'])
                    ->update([ 'familyname'=>$request['familyname'] ]);

            }
            catch(ModelNotFoundException $err){
                //Show error page
            }
        }

        public function updateGender($request)
        {
            try{
                //Find the user object from model if it exists
                DB::table('t_user')
                    ->where('id', $request['id'])
                    ->update([ 'sex'=>$request['gender'] ]);

            }
            catch(ModelNotFoundException $err){
                //Show error page
            }
        }


        public function updateAvatar($link)
        {
            $user = Auth::user();

            try{
                //Find the user object from model if it exists
                DB::table('t_user')
                    ->where('id', $user->id)
                    ->update([ 'avatar'=>$link ]);

            }
            catch(ModelNotFoundException $err){
                //Show error page
            }
        }

        public static function getUrlAvatar($link){

            return Storage::url($link);

        }

        public function deleteFileAvatar(){

            return Storage::delete(Auth::user()->avatar);

        }

        public function issetAvatar(){

            if (!in_array(Auth::user()->avatar, ["img/male.jpg", "img/female.jpg", "img/unknow.jpg"])){
                return true;
            }
            else{
                return false;
            }

        }

    }