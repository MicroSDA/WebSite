//<![CDATA[
$(window).load(function(){
var $div = $('#div'),
    $scroll = $('#scroll'),
    $inner = $('#inner'),
    innerHeight = $inner.outerHeight(),
    divHeight = $div.innerHeight();

$div.scroll(function() {
    var scrollBottom = innerHeight - divHeight - $div.scrollTop();
    
    console.log(innerHeight, divHeight, $div.scrollTop());
    
    $scroll.val(scrollBottom + ' px');
});
});//]]>