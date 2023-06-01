function sayfa(ad,menu){
    var denem = document.getElementsByClassName("active")[0];
    if("#"+denem.classList[1]==ad){
        console.log("evet");
        $(ad).css("animation","titre .3s");
        setTimeout(()=>{
            $(ad).css("animation","unset");
        },1000);
    }else{
        $(".menu > li").removeClass("active");
        $("."+menu).addClass("active");
        $(".sekme").css("animation","kapat 1s");
        $(ad).css("animation","unset");
        setTimeout(()=>{
            $(".sekme").css("display","none");
            $(ad).css({"display":"block","opacity":1,"animation":"getir 1s"});
        },1000);
        createCookie(ad);
    }
}


function createCookie(page){
    const date = new Date();
    date.setTime(date.getTime()+86400*1000);
    document.cookie = `page=${page};expires=${date.toUTCString()};path=/`;
}

function getCookie(name){
    var sayfamiz;
    const decode = decodeURIComponent(document.cookie);
    const bol = decode.split("; ");
    bol.forEach(element=>{
        if(element.indexOf(name)==0){
            sayfamiz = element.split("=#")[1];
        }
    });
    return sayfamiz;
}
