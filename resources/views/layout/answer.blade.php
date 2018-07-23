<div class="collapse container" id="spoiler-{{ $message->id }}">
    <div class="well">
        <div class="box box-warning direct-chat direct-chat-warning">
            <div class="box-body">
                <div class="direct-chat-messages">

                    @foreach($viewAnswers as $viewAnswer)
                        {!! $viewAnswer !!}
                    @endforeach

                </div>
                <!--/.direct-chat-messages-->
            </div>
            <!-- /.box-body -->
            <!--/.direct-chat -->
        </div>
        <!--/.direct-well -->
    </div>
    <!--/.direct-collapse -->
</div>