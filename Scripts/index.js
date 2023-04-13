/* function openPerson(evt, personName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName('tabcontent');
    for (i = 0; i < tabcontent.length; i++){
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName('tablinks');
    for (i = 0; i < tablinks.length; i++){
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
     // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active"; }*/

    function showPerson(personName){
        var patients = document.getElementById('patients');
        var doctors = document.getElementById('doctors');
        var everone = document.getElementById('everyone');
        var btn = document.getElementsByClassName('tablink');
        var content = document.getElementsByClassName('tabcontent');
        for (let i = 0; i < btn.length; i++) {
             btn[i].className = btn[i].className.replace(' active', '');
        }
            for (let i = 0; i < content.length; i++) {
                const el1 = array[i];
                document.getElementById(personName).style.display = "block";
            }
    }

    var click = document.getElementById(personName);
    click.addEventListener('click', function(){
        // showPerson(patients)
    }, false);


