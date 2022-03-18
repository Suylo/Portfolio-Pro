$(document).ready(function(){
    function loadPage(id)
    {
        $.ajax({
            url: "assets/dev/fetch.php",
            method: "POST",
            data: {id:id},
            success:function(data)
            {
                $('#llbn-wrapper').html(data);
            }
        });
    }
    loadPage(1);

    $('ul#llbn-menu li').click(function(){
        var page_id = $(this).attr("id");
        $('[class=active]').removeAttr("class");
        $(this).attr("class", "active");
        loadPage(page_id);
    });
});