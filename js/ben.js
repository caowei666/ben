// 最顶上功能
$(function(){
    $(".shanChu").click(function(){
        $(".canHide").css({
            display:"none"
        })
    })
// 滑到本来生活弹出二维码
    $(".ulli3").hover(
        function(){
            $(".ulli3>div").css({
                display:"block"
            })
        },
        function(){
            $(".ulli3>div").css({
                display:"none"
            })
        }
    )
    $(".top-con .right li:nth-of-type(4)").hover(
        function(){
            $(".top-con .right li:nth-of-type(4) div").css({
                display:"block"
            })
        },
        function(){
            $(".top-con .right li:nth-of-type(4) div").css({
                display:"none"
            })
        }
    )

})

