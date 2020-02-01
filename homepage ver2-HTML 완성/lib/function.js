function showCountdown() {

    var startday = new Date("2017/09/14 14:00:00");

    var Dday = new Date("2019/05/25 00:00:00 ");

    var today = new Date();

    Dday = Dday - Dday.getMilliseconds();

    today = today - today.getMilliseconds();

    startday = startday - startday.getMilliseconds();


    var mod, text, timeOut;

    if (Dday > today) {

        var didday = today / 1000 - startday / 1000;

        var fulldays = Dday / 1000 - startday / 1000;

        var secondIntervals = Dday / 1000 - today / 1000;

        var days = Math.floor(secondIntervals / 86400);

        var percentage = Math.floor(didday * 100 / fulldays);

        mod = secondIntervals % 86400;

        var hours = Math.floor(mod / 3600);

        mod = mod % 3600;

        var minutes = Math.floor(mod / 60);

        var seconds = mod % 60;

        text = "전역까지 ";

        text += days + "일 " + hours + "시간 " + minutes + "분 " + seconds + "초 ";

        text += "("+percentage + "%)"

        var setMsec = 1000 - new Date().getMilliseconds();

        timeOut = setTimeout(showCountdown, setMsec);
    } else if (Dday == today) {

        text = "전역을 축하합니다!";

        clearTimeout(timeOut);
    }

    document.getElementById("message").innerHTML = text;
}
var call_function = showCountdown();
