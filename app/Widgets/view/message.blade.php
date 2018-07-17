@section('message')

<div class="post container">
    <div class="user-block">
        <img class="img-circle img-bordered-sm" src="$user->avatar"alt="user image">
        <span class="username">
            <a href="#"> $user->name  $user->familyname</a>
        </span>
        <span class="description">Опубликовано -  {{ $message->data }} </span>
    </div>
    <!-- /.user-block -->
    <p>
         {{ $message->message }}
    </p>

    <ul class="list-inline container">

        <li>
            <span class="badge" id="badgeId-' . $message->id . '">' . $countlikes->countLike . '</span>
            <button id="buttonId-' . $message->id . '" data-idMessage="' . $message->id . '"
                    class="">
                <i class="far fa-thumbs-up" ></i> Like
            </button>
        </li>
        <!--
        <li>
            <span class="badge" id="badgeId-' . $message->id . '">' . $countlikes->countLike . '</span>
            <i class="far fa-thumbs-up" ></i> Like
        </li>-->

        <li class="pull-right">
            <a href="#spoiler-' . $message->id . '" data-toggle="collapse" class="link-black text-sm">
                <i class="far fa-comments"></i> Комментариев

            </a>
        </li>
    </ul>
@yield('formAnswer')
</div>
<!-- /.post -->
@endsection