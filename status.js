
 // Retrieve form data from localStorage
var nameValue = localStorage.getItem('project');
var dateValue = localStorage.getItem('date');
var numberprinterValue = localStorage.getItem('printer');
var numberValue = localStorage.getItem('end');

// Display output
var outputDiv = document.getElementById('output');
outputDiv.innerHTML = "<p>Project name : " + nameValue + "</p> <p>Date : " + dateValue + " </p>  <p>3D Printer : " + numberprinterValue + "</p>  <p>Hour : " + numberValue + "</p> ";


function cancelOutput() {
    localStorage.removeItem('project', nameValue);
    localStorage.removeItem('date', dateValue);
    localStorage.removeItem('printer', numberprinterValue);
    localStorage.removeItem('end', numberValue);
    document.getElementById('cancelLink').href = `cancel_reservation.php?id=${reservationId}`;
    var outputDiv = document.getElementById('output');
    outputDiv.innerHTML = "<p>Project name : null</p> <p>Date : null</p>  <p>3D Printer : null</p>  <p>Hour : null</p> "; // Clear the output
    }

function finishOutput(){
    localStorage.removeItem('project', nameValue);
    localStorage.removeItem('date', dateValue);
    localStorage.removeItem('printer', numberprinterValue);
    localStorage.removeItem('end', numberValue);

    var outputDiv = document.getElementById('output');
    outputDiv.innerHTML = "<p>Project name : null</p> <p>Date : null</p>  <p>3D Printer : null</p>  <p>Hour : null</p> <p>Finished !!</p> "; // Clear the output
    }