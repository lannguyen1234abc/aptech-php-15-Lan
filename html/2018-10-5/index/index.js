var div = document.getElementById('an-hien');
function hien(){
    div.style.display = 'block';
    console.log(div);
}
function an(){
    div.style.display = 'none';
}
function anhien(){
    if (div.style.display === 'none'){
        div.style.display = 'block';
    }else{
        div.style.display = 'none';
    }
}