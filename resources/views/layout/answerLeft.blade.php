<!-- Message. Default to the left -->
<div class="direct-chat-msg">
    <div class="direct-chat-info clearfix">
        <span class="direct-chat-name pull-left">{{ $user->name }} {{ $user->familyname }}</span>
        <span class="direct-chat-timestamp pull-right">{{ $answer->date }}</span>
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
