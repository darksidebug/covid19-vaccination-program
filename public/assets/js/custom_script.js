// ---------Responsive-navbar-active-animation-----------
function test(){

    var tabsNewAnim = $('#navbarSupportedContent');
    var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
    var activeItemNewAnim = tabsNewAnim.find('.active');
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    // $('#navbarSupportedContent ul li').removeClass("active");

    $(".hori-selector").css({
        "top":itemPosNewAnimTop.top + "px",
        "left":itemPosNewAnimLeft.left + "px",
        "height": activeWidthNewAnimHeight + "px",
        "width": activeWidthNewAnimWidth + "px"
    });

    $("#navbarSupportedContent").on("click","li",function(e){
        $('#navbarSupportedContent ul li').removeClass("active");
        $(this).addClass('active');
            var activeWidthNewAnimHeight = $(this).innerHeight();
            var activeWidthNewAnimWidth = $(this).innerWidth();
            var itemPosNewAnimTop = $(this).position();
            var itemPosNewAnimLeft = $(this).position();
            $(".hori-selector").css({
            "top":itemPosNewAnimTop.top + "px",
            "left":itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
    });
}

$(document).ready(function(){
    setTimeout(function(){ test(); });
});

$(window).on('resize', function(){
    setTimeout(function(){ test(); }, 500);
});

$(".navbar-toggler").click(function(){
    setTimeout(function(){ test(); });
});

$(document).ready(function() {
    $("#owl-demo").owlCarousel({
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem : true
    });
});

$(document).ready(function(){
    let gender = document.registerForm.gender;
    let prev = null;
    for (var i = 0; i < gender.length; i++) {
        gender[i].addEventListener('change', function() {
            (prev) ? prev.value: null;
            if (this !== prev) {
                prev = this;
            }

            if(prev.value === "Male"){
                var nodes = document.getElementById("pregnant_status").getElementsByTagName('*');
                for(var i = 0; i < nodes.length; i++){
                    nodes[i].disabled = true;
                    nodes[i].checked = false;
                }
            }else{
                var nodes = document.getElementById("pregnant_status").getElementsByTagName('*');
                for(var i = 0; i < nodes.length; i++){
                    nodes[i].disabled = false;
                    nodes[i].checked = false;
                }
            }
        });

    }

    DisableDropDown(document.registerForm.comorbidity, "comorbidity_yes", "Yes", "None");
    DisableDropDown(document.registerForm.allergy, "allergy_yes", "Yes", "No");
    DisableDropDown(document.registerForm.diagnose_covid, "date_diagnose_covid_yes", "Yes", "No");
    DisableDropDown(document.registerForm.diagnose_covid, "covid_classification", "Yes", "No");

    function DisableDropDown(element, dropdown, first_value, second_value){

    let prev = null;
    for (var i = 0; i < element.length; i++) {
        element[i].addEventListener('change', function() {
            (prev) ? prev.value: null;
            if (this !== prev) {
                prev = this;
            }

            if(prev.value === first_value){
                document.getElementById(dropdown).disabled = false;
            }else{
                document.getElementById(dropdown).disabled = true;
                document.getElementById(dropdown).selectedIndex = "0";
                document.getElementById(dropdown).value = new Date(0);
            }
        });
        }
    }

})
