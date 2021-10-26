function validateStartDate(){
    var getDate = document.getElementById('date').value;
    var startDate = new Date(getDate);
    var todayDate = new Date(Date.now());
    console.log('start:'+startDate)
    console.log('today:'+todayDate)

    if (startDate < todayDate){
        alert("The  start  date  cannot  be  from today and the past! ");
        return false
    }
    return true
}