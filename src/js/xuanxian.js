$(function () {
    // let lis=$(".nav>ul>li")
    // let as=$(".nav>ul>li>a>span")
    // console.log(as)
    // console.log($(".nav>ul>li").children(".chu"))
    // $(".nav>ul>li").mouseover(function (val,index){
    //     $(".nav>ul>li>a>span").show()
    //     $(".nav>ul>li").children(".chu").show()
    //     $(".dinwei").show()
    // }).mouseout(function (){
    //     $(".nav>ul>li>a>span").hide()
    //     $(".nav>ul>li").children(".chu").hide()
    //     $(".dinwei").hide()
    // })
    $(".nav ul").children("li").mouseover(function () {
        let index= $(".nav ul").children("li").index(this);
        $(".nav ul").children("li").children(".chu").hide();
        $(".nav ul").children("li").eq(index).children(".chu").show();
        $(".dinwei").show()
    })
    $(".nav ul").children("li").mouseout(function () {
        let index= $(".nav ul").children("li").index(this);
        $(".nav ul").children("li").children(".chu").hide();
        $(".nav ul").children("li").eq(index).children(".chu").hide();
        $(".dinwei").hide()
    })
    $(".nav ul").children("li").mouseover(function () {
        let index= $(".nav ul").children("li").index(this);
        $(".nav ul").children("li").children(".navline").hide();
        $(".nav ul").children("li").eq(index).children(".navline").show();
        $(".dinwei").show()
    })
    $(".nav ul").children("li").mouseout(function () {
        let index= $(".nav ul").children("li").index(this);
        $(".nav ul").children("li").children(".navline").hide();
        $(".nav ul").children("li").eq(index).children(".navline").hide();
        $(".dinwei").hide()
    })
})