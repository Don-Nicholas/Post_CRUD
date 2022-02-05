$(function(){
        
    let datePicker = document.getElementById('datePicker');
    let picker = new Litepicker({
        element: datePicker,
        format: 'YYYY-MM-DD'
    });
    
    let dateRangePicker = document.getElementById('dateRangePicker');
    let pickerRange = new Litepicker({
        element: dateRangePicker,
        format: 'YYYY-MM-DD',
        singleMode: false,
    });
});