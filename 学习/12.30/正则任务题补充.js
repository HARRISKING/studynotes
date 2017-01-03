<script>
function hasClass(ele, cls){
    return !!ele.className.match(new RegExp('\\b'+cls+'\\b'));
},
function addClass(ele, cls){
    if(Utils.hasClass(ele,cls)) return;
    ele.className += ' ' + cls;
},

function removeClass(ele, cls){
    ele.className = ele.className.replace(new RegExp('\\b'+cls+'\\b', 'g'), '');
},
indexOf: function(ele){
    var parent = ele.parentElement,
        siblings = parent.children;
    for(var i=0; i<siblings.length; i++){
        if(ele === siblings[i]) return i;
    }
    return -1;
}
</script>
