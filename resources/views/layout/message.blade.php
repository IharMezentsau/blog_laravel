<div class="post container">
    <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{ asset($url) }}" alt="user image">
        <span class="username">
            <a href="#">{{ $user->name }} {{$user->familyname}}</a>
        </span>
        <span class="description">Опубликовано - {{ $message->date }}</span>
    </div>
    <!-- /.user-block -->
    <p>
        {{ $message->message }}
    </p>

    <ul class="list-inline container">
        @auth
            <li>
                <span class="badge" id="badgeId-{{ $message->id }}">{{ $countLikes }}</span>
                @if($likeByUser == 0)
                    <button id="buttonId-{{ $message->id }}" data-idMessage="{{ $message->id }}" class="likeButton btn btn-info btn-sm">
                        <i id="iId-{{ $message->id }}" class="far fa-thumbs-up" ></i> Like
                    </button>
                @else
                    <button id="buttonId-{{ $message->id }}" data-idMessage="{{ $message->id }}" class="likeButton btn btn-danger btn-sm">
                        <i id="iconId-{{ $message->id }}" class="far fa-thumbs-down" ></i> Like
                    </button>
                @endif
            </li>
        @else
            <li>
                <span class="badge" id="badgeId-{{ $message->id }}">{{ $countLikes }}</span>
                <i class="far fa-thumbs-up" ></i> Like
            </li>
        @endauth

        <li class="pull-right">
            <a href="#spoiler-{{ $message->id }}" data-toggle="collapse" class="link-black text-sm">
                <i class="far fa-comments"></i> Комментариев
                {{ $countAnswer }}
            </a>
        </li>
    </ul>

@include('layout.formAnswer')

</div>
<!-- /.post -->
@if($countAnswer != 0)
    {!! $viewAns !!}
@endif