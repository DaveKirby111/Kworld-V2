function currentdate() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var d = today.getDate();
    var mo = today.getMonth();
    var y = today.getFullYear();

    var daylist = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    ];

    const months = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];

    let ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = m.toString().padStart(2, '0');
    let strTime = h + ':' + m + ' ' + ampm;

    document.getElementById("time").innerHTML = "Time: " + strTime;

   
    var dateObject = document.getElementById("date");
    if (dateObject) dateObject.innerHTML = "Date: " + months[mo] + " " + d + ", " + y;

    let day = daylist[today.getDay()];

    document.getElementById("day").innerHTML = "Day: " + day;
}