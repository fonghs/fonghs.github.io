//鎖右鍵
    $(function () {
        $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });
    });