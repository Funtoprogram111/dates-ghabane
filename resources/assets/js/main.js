(function() {


    $(document).ready(function() {


        ScrollReveal().reveal('.headline');

        $(window).scroll(function() {
            var e = $(".navbar-expand-lg.fixed-top");
            e.toggleClass("scrolled", $(this).scrollTop() > e.height());
        });

        $('.status').tooltip({
            placement: 'top',
            title: 'In stock'
        });
        $('.remove').tooltip({
            placement: 'top',
            title: 'remove your item'
        });
        $('.refresh').tooltip({
            placement: 'top',
            title: 'refresh your quantity'
        });


    });

     /*setTimeout(function() {
       $('.wrapper').addClass('loaded');
     }, 3000);*/


        var pooper = new TypeIt('#introtxt', {
            strings: ["Lorem ipsum dolor,","Eum error illum numquam animi."],
            speed: 40,
            breakLines: false,
            waitUntilVisible: true
        }).go();

})();
