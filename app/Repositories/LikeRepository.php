<?php
    namespace App\Repositories;


    use App\Repositories\LikeInterface as LikeInterface;

    use App\Like;
    use Illuminate\Support\Facades\Auth;


    class LikeRepository implements LikeInterface
    {

        protected $like;

        function __construct(Like $like)
        {
            $this->like = $like;
        }

        public function insertLike($idMessage){

            $user = Auth::user();

            Like::create(array(
                'message_id' => $idMessage,
                'user_id' => $user->id));

        }

        public function deleteLike($id){

            $user = Auth::user();

            $like = Like::where(['message_id' => $id, 'user_id' => $user->id])->delete();
        }

        public function countLike($id){

            $likes = \App\Message::find($id)->like;

            $countLikes = $likes->count();

            return $countLikes;

        }

        public function likeByUser($id){

            $user = Auth::user();

            $like = Like::where(['user_id' => $user->id, 'message_id' => $id]);

            return $like;

        }

        public static function countLikeByUser($id){

            $user = Auth::user();

            $count = Like::where(['user_id' => $user->id, 'message_id' => $id])->count();

            return $count;

        }

    }