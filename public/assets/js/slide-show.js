let count = 1;
document.getElementById('radio1').checked = true;
setInterval
(()=>{
    nextItem();
},5000);




function nextItem() {
    count++;
    if(count > 4){
        count=1;

    }

        document.getElementById('radio'+count).checked = true;
  }
