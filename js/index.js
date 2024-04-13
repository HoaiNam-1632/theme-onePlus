var select = document.getElementById("outline-click");
var ulElement = document.getElementsByClassName("outline__list-2")[0];
var clickCounter = 0;

function scrollToForm (title, subtitle = null) {
     var setId = (subtitle == null) ? title : title+'_'+subtitle;
    document.getElementById('item_'+setId).scrollIntoView({
        behavior: 'smooth'
      });
}


select.addEventListener('click', function (event) {
    if(clickCounter == 0){
        clickCounter++;
        ulElement.style.display = "block";
        ulElement.style.marginTop = "10px";
        select.innerHTML = "閉じる";
    }
    else{
        clickCounter = 0;
        ulElement.style.display = "none";
        ulElement.style.marginTop = "0";
        select.innerHTML = "開く";
    }
})