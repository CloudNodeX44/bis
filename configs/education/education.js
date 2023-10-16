var education = {
    'Currently Studying':['Elementary', 'High school', 'College', 'Post Graduate', 'Doctoral Graduate'],
    'Elementary Graduate': ['N/A'],
    'High School Graduate': ['N/A'],
    'College Graduate': ['N/A'],
    'Post Graduate': ['N/A'],
    'Doctoral Graduate': ['N/A'],
}

// Getting the main and sub menus
var main = document.getElementById('education');
var sub = document.getElementById('currentlyStudying');

// Trigger the event when the main menu change occurs
main.addEventListener('change', function(){

    // Getting a select option
    var selected_option = education[this.value];

    // Removing the sub menu options using a while loop
    while(sub.options.length > 0){
        sub.options.remove(0);
    }

    // Convert the selected object into an array and create options for each array element
    Array.from(selected_option).forEach(function(el){
        let option = new Option(el, el);
    
        // Append child
        sub.appendChild(option);
    });
});