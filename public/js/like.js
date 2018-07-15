$(document).ready(function() {
    $(".likeButton").click(function(event) {
        console.log(event);
        var id = $(this).attr('data-idMessage');
        var data = {id:id};
        $.ajax({
            type:"POST",
            url:"like.php",
            data:JSON.stringify(data),
            success:
                function(data) {
                    answer(data);
                },
        }, "json");
        function answer(n) {
            var badgeId = '#badgeId-' + id;
            var buttonId = '#buttonId-' + id;
            $(badgeId).text(n);
            $(buttonId).toggleClass('likeButton btn btn-danger btn-sm').toggleClass('likeButton btn btn-info btn-sm');


        };
    });
});