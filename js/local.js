/*==============\
|     index     |
|==============*/

//pour afficher les texts alternatifs (et les cacher)

var textBasique=document.getElementsByClassName('textBasique');
var textAlternat=document.getElementsByClassName('textAlternat');
var moreInfo1=document.getElementsByClassName('more-info1');
var moreInfo2=document.getElementsByClassName('more-info2');
var moreInfo3=document.getElementsByClassName('more-info3');

$(textAlternat).hide();

$(moreInfo1).mouseenter(function(){
$(moreInfo1).find(textBasique).toggle(300);
$(moreInfo1).find(textAlternat).toggle(300);
});
$(moreInfo1).mouseleave(function(){
$(moreInfo1).find(textBasique).toggle(300);
$(moreInfo1).find(textAlternat).toggle(300);
});

$(moreInfo2).mouseenter(function(){
$(moreInfo2).find(textBasique).toggle(300);
$(moreInfo2).find(textAlternat).toggle(300);
});
$(moreInfo2).mouseleave(function(){
$(moreInfo2).find(textBasique).toggle(300);
$(moreInfo2).find(textAlternat).toggle(300);
});

$(moreInfo3).mouseenter(function(){
$(moreInfo3).find(textBasique).toggle(300);
$(moreInfo3).find(textAlternat).toggle(300);
});
$(moreInfo3).mouseleave(function(){
$(moreInfo3).find(textBasique).toggle(300);
$(moreInfo3).find(textAlternat).toggle(300);
});


//changement de couleurs pour le descriptif

var inSpace=document.getElementById("descrEvent");
var meetScientist=document.getElementById("meetScientist");

$(inSpace).mouseenter(function(){
  $(inSpace).addClass("greycolor");
});
$(meetScientist).mouseenter(function(){
  $(meetScientist).addClass("greycolor");
});
$(inSpace).mouseleave(function(){
  $(inSpace).removeClass("greycolor");
});
$(meetScientist).mouseleave(function(){
  $(meetScientist).removeClass("greycolor");
});
