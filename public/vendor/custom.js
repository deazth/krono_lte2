var loginheight = $(window).height() - 152;
// alert($('.login').height()+" "+$(window).height())
if($('.login').height()<=$(window).height()){
    $('.login').height(loginheight);
}

// if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(function (position) {
//         console.log(position);
//         alert(position);
//     });
// }
// alert($('.login').height());


var timestart;

function punch(){
    // var now = new Date(); 
    var now = new Date(); 
    timere = "00:00:00";
    Swal.fire({
            title: 'Start Overtime',
            html: "Are you sure you want to <b style='color:#143A8C'>start</b> your overtime at <b style='color:#143A8C'>"+Date.parse(now).toString("HHmm")+"</b> on <b style='color:#143A8C'>"+Date.parse(now).toString("dd.MM.yyyy")+"</b>?",
            showCancelButton: true,
            confirmButtonText:
                                'YES',
                                cancelButtonText: 'NO',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6'
            }).then((result) => {
                //startot ajx
                starttime(now);
                timestart = setInterval(timer(0, 0, 0, parseInt(Date.parse(now).toString("ss")), parseInt(Date.parse(now).toString("mm")), parseInt(Date.parse(now).toString("H"))), 1000);
                
            })   
    }
    

function starttime(now){
        var future = new Date(); 
        Swal.fire({
            title: 'Start Overtime',
            customClass: 'test',
            html: "<p><b>OT TIMER : <span style='color: #143A8C'><span id='timerd'>"+Date.parse(now).toString("dd.MM.yyyy")+"</span> <span id='timerh' style='margin-left: 3px'>"+timere+"</span></span></b></p>",
            showCancelButton: true,
            confirmButtonText:
                                'END OVERTIME',
                                cancelButtonText: 'CANCEL',
            confirmButtonColor: '#F00000',
            cancelButtonColor: '#3085d6',
            allowOutsideClick: false
            }).then((result) => {
            if (result.value) {
                Swal.fire({
                    title: 'Start Overtime',
                    html: "Are you sure you want to <b style='color:#143A8C'>end</b> your overtime at <b style='color:#143A8C'>"+Date.parse(future).toString("HHmm")+"</b> on <b style='color:#143A8C'>"+Date.parse(future).toString("dd.MM.yyyy")+"</b>?",
                    showCancelButton: true,
                    confirmButtonText:
                                        'YES',
                                        cancelButtonText: 'CANCEL',
                    confirmButtonColor: '#F00000',
                    cancelButtonColor: '#3085d6',
                    allowOutsideClick: false
                    }).then((result) => {
                    if (result.value) {
                        //endot ajx
                        
                        clearInterval(timestart); 
                    }else{
                        
                        starttime(now);
                    }
                })
            }else{
                Swal.fire({
                    title: 'Cancel Overtime',
                    html: "Are you sure you want to <b style='color:#143A8C'>cancel</b> your overtime at <b style='color:#143A8C'>"+Date.parse(now).toString("HHmm")+"</b> on <b style='color:#143A8C'>"+Date.parse(now).toString("dd.MM.yyyy")+"</b>?",
                    showCancelButton: true,
                    confirmButtonText:
                                        'YES',
                                        cancelButtonText: 'CANCEL',
                    confirmButtonColor: '#F00000',
                    cancelButtonColor: '#3085d6',
                    allowOutsideClick: false
                    }).then((result) => {
                    if (result.value) {
                        clearInterval(timestart); 
                    }else{
                        starttime(now);
                    }
                })
            }            
        })
}

function timer(psecond, pminute, phour, dsecond, dminute, dhour){
    return function(){
        psecond++;
        if(psecond==60){
            pminute++;
            psecond=0;
        }
        if(pminute==60){
            phour++;
            pminute=0;
        }
        var phours = phour;
        var pminutes = pminute;
        var pseconds = psecond;
        if(phours < 10){
            phours = "0"+phours;
        }
        if(pminutes < 10){
            pminutes = "0"+pminutes;
        }
        if(psecond < 10){
            pseconds = "0"+pseconds;
        }
        if((((dhour*60*60)+(dminute*60)+dsecond)+((phour*60*60)+(pminute*60)+psecond))==86400){
            $("#timerd").text(Date.parse(now).addDays(1).toString("dd.MM.yyyy"));
        }
        // if minutes
        $("#timerh").text(phours+":"+pminutes+":"+pseconds);
        timere = phours+":"+pminutes+":"+pseconds;
    }
}


// setInterval(function() {
//         $("#x").text((new Date - start) / 1000 + " Seconds");
//         //  $('.Timer').text((new Date - start) / 1000 + " Seconds");
//     }, 1000);</script>