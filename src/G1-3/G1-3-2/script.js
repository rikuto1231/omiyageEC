'use strinct';
document.getElementById('form').onsubmit=function(event){
    event.preventDefault();
    let inputForm=document.getElementById('form').content.value;
    document.getElementById('output').textContent='${inputForm}';
}
