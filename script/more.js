
function wait(){
    alert("현재 기능을 개발하고 있어요!");
}

function function_document(doctype){
    document.getElementById("container").classList.remove('aniz');
    document.getElementById("container").classList.add('aniz');
    setTimeout(function() {
        location.href = `./function/document.php?doctype=${doctype}`;
    }, 125);
}

function call_function(page) {
    document.getElementById("container").classList.remove('aniz');
    document.getElementById("container").classList.add('aniz');
    location.href = `./function/${page}.php`;
}

function newtab(link) {
    return window.open(link);
}