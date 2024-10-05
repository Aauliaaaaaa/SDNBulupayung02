$(window).on("load",function(){
    var elem =document.querySelector(".mansory");
    new Masonry(elem, {
        itemSelector : ".mansory-item",
        columnWidth:200,
        gutter: 20,
        columnWidth: ".mansory-sizer",
        percentPosition: true,
    });
    
       $(".btn-to-top").click(function(){
        $("html","body").animate(
            {
            scrollTop : 0,
        },
         1500, 
         "easeInOutExpo"
        );
       });

       AOS.init();

       const galeriIsotope = $(".galeri-container").isotope({
        itemSelector: ".galeri-item",
       });

       $(".galeri-filters li").click(function(){
        $(".galeri-filters").removeClass("filter-active");
        $(this).addClass("filter-active");
       });
    });

