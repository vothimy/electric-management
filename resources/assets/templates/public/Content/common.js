
		//Active menu
        $(function() {
            var pgurl = window.location.href.substr(window.location.href
                .lastIndexOf("/") + 1);
            $("#nav > li:first > a").each(function () {
                if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
                    $(this).parent().addClass("active");
            });


            $("#nav > li a[href*='frm']").each(function () {
                if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
                    if ($(this).parents('li').hasClass('dropdown')) {
                        $(this).parents('li').addClass("active");
                    }
            });

            if (pgurl.search( 'frm') >=0) {
                $("#Open").css('display', 'none');
            }
            if (pgurl.search('Doc') >= 0) {
                $("#Open").css('display', 'none');
            }

        });



       
