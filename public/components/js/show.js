$("href").click(function(){
    $.ajax({url: "route('idshow',['id'=>$lead->id])", success: function(){
        
    }});
});
