document.getElementById('sorteer').onchange = function() {
    var class_id = new URLSearchParams(window.location.search).get('class_id');
    window.location = "/bouwsteenappleerkrachten/opdrachten.php?class_id=" + class_id + "&sort=" + this.value;
};