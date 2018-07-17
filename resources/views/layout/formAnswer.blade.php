@section('formAnswer')
<form action="{{ route('index') }}" class="form-horizontal" name="sendAnswer" method="post">
    <div class="input-group">
        <input class="form-control input-sm" autocomplete="off" name="newAnswer" type="text" placeholder="Напишите комментарий">
        <span class="input-group-btn">
                <button type="submit"  class="btn btn-sm btn-primary btn-flat" name="message_id" value="' . $message->id . '">
                    <i class="fas fa-share-square"></i>
                </button>
            </span>
        <input type="hidden" name="page" value="' . $p . '">
    </div>
    {{csrf_field()}}
</form>
@endsection