$(document).ready(function(){
    $("#matematikaDasar").hover(function(){
        $(".matematikaDasar").show();
        $(".matematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#matematikaIpa").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").show();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#fisika").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").hide();
        $(".tahunfisika").show();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#kimia").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").show();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#biologi").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").show();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#inggris").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").show();
        $(".tahunindo").hide();
        $(".tahuntpa").hide();
    });
    $("#indo").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").show();
        $(".tahuntpa").hide();
    });
    $("#tpa").hover(function(){
        $(".matematikaDasar").hide();
        $(".matematikaIpa").hide();
        $(".tahunfisika").hide();
        $(".tahunkimia").hide();
        $(".tahunbiologi").hide();
        $(".tahuninggris").hide();
        $(".tahunindo").hide();
        $(".tahuntpa").show();
    });

});


$(document).ready(function(){
    // $(".button-tahun").click(function(){
    //     $("#sidebar-right-expand").show();
    // });

    $('.button-wrapper-right a').on('click', function() {
    $("#sidebar-wrapper-right").toggleClass('clicked');
    $("#wrapper").toggleClass('rightclicked');
    });

    $('.button-wrapper a').on('click', function() {
    $("#sidebar-wrapper").toggleClass('clicked');
    $(".button-wrapper").toggleClass('clicked');
    $("#wrapper").toggleClass('leftclicked');
    });
});



// testi

$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
