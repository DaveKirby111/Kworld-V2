
function thedate() {

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

    const d = new Date();
    var day = d.getDate();
    var month = d.getMonth();
    var year = d.getFullYear();

    var dateObject = document.getElementById("date");
    if (dateObject) dateObject.innerHTML = months[month] + " " + day  + ", " + year;

};