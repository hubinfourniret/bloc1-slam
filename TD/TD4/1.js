const $=(id)=>document.getElementById(id);

const addEvt=function(type,id,listener){
    const elm=$(id);
    elm && elm.addEventListener(type, listener);

};

addEvt("click","bt-bg",function(){
    const color=$("selected-color").value;
    document.body.style.backgroundColor=color;
});


addEvt("click","bt-add",function(){
    document.querySelectorAll(".liste").forEach(
        (elm)=>{
            const tagName=elm.tagName=="SELECT"?"option":"li";
        const li=document.createElement("li");
        li.innerText=$("selected-text").value;
        elm.appendChild(li);
        }
    );
});