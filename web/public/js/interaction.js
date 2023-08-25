$(document).ready(function () {
    $('.register_btn').click(function () { 
       $('.login').toggleClass('visible invisible');
       $('.register').toggleClass('visible invisible');
    });
    $('.login_btn').click(function () { 
        $('.login').toggleClass('visible invisible');
        $('.register').toggleClass('visible invisible');
    });
    $('.command').click(function () { 
        $(this).toggleClass('clicked');
        
    });
});
function LikePost(i){
    $(`#like${i} .img`).toggleClass('liked');
    if($(`#like${i} .img`).hasClass('liked'))
    {
        $(`#label${i} p`).text((_, oldText) => parseInt(oldText) + 1);
    }
    else{
        $(`#label${i} p`).text((_, oldText) => parseInt(oldText) - 1);
    }
}

function showeditcomment(i){
    $(`#edits${i}`).toggleClass('hidden');
    
}