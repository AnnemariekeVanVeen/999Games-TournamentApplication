let intervalHandle;
let mySec;


function resetPage() {
    document.getElementById("inputArea").style.display = "none";

}



window.tick = function (mySec) {
    console.log(mySec);
    console.log("De value van mySec verdwijnt is niet gelukt om dit te fixen het lukt wel om de data in de database op te slaan");

        let minute = Math.floor(mySec/60);
        let second = mySec - (minute*60);

    if (second < 10) {
        second = "0" + second;
    }

    console.log(minute);
    console.log(second);
    let message=minute.toString()+":"+second;

    document.getElementById("time").innerHTML=message;

    if(mySec===0){
        alert("Done");
        clearInterval(intervalHandle);
        resetPage();
    }
    mySec--;
};


window.startCounter = function (mySec) {
    console.log("hier kom je ");
    intervalHandle = setInterval(tick, 1000);
    };





window.checkTimer = function (token, sec) {
    $.ajax({
        type: 'post',
        url: '/~menno/999games/api/timer',
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + token
        },
        data: {
            action: 'start',
            seconds: sec
        }
    }).done(function (data) {
        if (data) {
            console.log('input ok')
        }
    }).fail(function (ctx) {
        alert(ctx.responseText);
        console.log(ctx.responseText);
        console.log('no error')
    });
};

// const moment = require('moment');
// const eventTime= new Date(moment().add(642, 'seconds')); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
// const currentTime = new Date(); // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
// const diffTime = eventTime - currentTime;
// const duration = moment.duration(diffTime*1000, 'milliseconds');
// const interval = 1000;
//
//
//
//
//
// export default class Timer {
//
//     constructor(){
//         this.eventTime= new Date(); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
//         this.currentTime = new Date(); // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
//         this.diffTime = eventTime - currentTime;
//         this.duration = moment.duration(diffTime*1000, 'milliseconds');
//         this.interval = 1000;
//
//         this.fetch()
//     }
//
//     fetch(){
//         $.ajax({
//             type: 'get',
//             url: '/~menno/999games/api/timer',
//
//
//         })
//             .then((result)=>{
//                 this.eventTime= new Date(moment().add(result.seconds, 'seconds'));
//                 this.countDown();
//             })
//     }
//
//     countDown(){
//         setInterval(()=>{
//             this.duration = moment.duration(this.duration - this.interval, 'milliseconds');
//             $('.countdown').text(this.duration.hours() + ":" + this.duration.minutes() + ":" + this.duration.seconds())
//         }, this.interval);
//     }
// }
