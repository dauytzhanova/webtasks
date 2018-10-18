function lineth() {
    var line = event.currentTarget;
    if (line.parentNode.getAttribute('data-status')==='done'){
    line.parentNode.setAttribute('data-status','');}
    else{
        line.parentNode.setAttribute('data-status','done')
    }
}

var buttons = document.querySelectorAll('button');

for (const button of buttons)
  button.addEventListener('click',lineth);
