$(document).ready(function() {
    $(".likeButton").click(function(event) {
        console.log(event);
        var id = $(this).attr('data-idMessage');
        var data = {id:id};
        $.ajax({
            type:"POST",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            url:"like",
            data:JSON.stringify(data),
            success:
                function(data) {
                    answer(data);
                }
        }, "json");
        function answer(n) {
            var badgeId = '#badgeId-' + id;
            var buttonId = '#buttonId-' + id;
            var iconId = '#iconId' + id;
            $(badgeId).text(n);
            $(iconId).toggleClass('far fa-thumbs-down').toggleClass('far fa-thumbs-up');
            $(buttonId).toggleClass('likeButton btn btn-danger btn-sm').toggleClass('likeButton btn btn-info btn-sm');
        };
    });
});