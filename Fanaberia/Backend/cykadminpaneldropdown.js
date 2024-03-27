document.addEventListener("DOMContentLoaded", function(){
    let titlebox = document.querySelectorAll('.adminpanel-dropdown-title');
    let contentbox = document.querySelectorAll('.adminpanel-dropdown-content');
    let czyrozwiniety = [false,false,false];

    console.log(titlebox);
    console.log(contentbox);



    titlebox.forEach((element,index) => {
        element.addEventListener('click',function(){
            if(czyrozwiniety[index]){
                zwin(index);
                console.log('zwijanko',[index]);
            }else{
                rozwin(index);
                console.log('rozwijanko');
            }
        })
    
        function zwin(index){
            contentbox[index].style.height = '0';
            czyrozwiniety[index] = false;
        }
    
        function rozwin(index){
            let boxheigh = contentbox[index].scrollHeight;
            contentbox[index].style.height = boxheigh + 'px';
            console.log(boxheigh);
            czyrozwiniety[index] = true;
        }
        
    });
    

})