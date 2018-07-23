<!-- Message to the right -->
<div class="direct-chat-msg right">
    <div class="direct-chat-info clearfix">
        <span class="direct-chat-name pull-right">{{ $user->name }} {{ $user->familyname }}</span>
        <span class="direct-chat-timestamp pull-left">{{ $answer->date }}</span>
    </div>
    <!-- /.direct-chat-info -->
    <img class="direct-chat-img" src="{{ asset($url) }}" alt="message user image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
        {{ $answer->answer }}
    </div>
    <!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->