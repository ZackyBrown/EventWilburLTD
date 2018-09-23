/*==============\
|     index     |
|==============*/

//pour afficher les texts alternatifs (et les cacher)

textBasique=document.getElementsByClassName('textBasique');
textAlternat=document.getElementsByClassName('textAlternat');
moreInfo1=document.getElementsByClassName('more-info1');
moreInfo2=document.getElementsByClassName('more-info2')
moreInfo3=document.getElementsByClassName('more-info3')

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
