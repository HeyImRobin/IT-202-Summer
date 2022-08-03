<?php
require(__DIR__ . "/../../partials/nav.php");
?>

<!DOCTYPE html>
 
<html>
  <body>
    <div style = "text-align:center;">
    <h1>Collect the Square!</h1>
    <h4>To make it slightly more challenging <h4>
    <h4>squares will be moving and will be harder to see</h4>
    

    <canvas id="canvas" width="600" height="400" tabindex="1"></canvas>
    </div>
    <body>
   
</html>
 
<script>

// Collect The Square game

// Get a reference to the canvas DOM element
var canvas = document.getElementById('canvas');
// Get the canvas drawing context
var context = canvas.getContext('2d');

// Your score
var score = 0;

// Properties for your square
var x = 50; // X position
var y = 100; // Y position
var speed = 6; // Distance to move each frame
var sideLength = 50; // Length of each side of the square

// FLags to track which keys are pressed
var down = false;
var up = false;
var right = false;
var left = false;

// Properties for the target square
var targetX = 0;
var targetY = 0;
var targetLength = 25;

// Determine if number a is within the range b to c (exclusive)
function isWithin(a, b, c) {
  return (a > b && a < c);
}

// Countdown timer (in seconds)
var countdown = 60;
// ID to track the setTimeout
var id = null;

// Listen for keydown events
canvas.addEventListener('keydown', function(event) {
  event.preventDefault();
  console.log(event.key, event.keyCode);
  if (event.keyCode === 40) { // DOWN
    down = true;
  }
  if (event.keyCode === 38) { // UP
    up = true;
  }
  if (event.keyCode === 37) { // LEFT
    left = true;
  }
  if (event.keyCode === 39) { // RIGHT
    right = true;
  }
});

// Listen for keyup events
canvas.addEventListener('keyup', function(event) {
  event.preventDefault();
  console.log(event.key, event.keyCode);
  if (event.keyCode === 40) { // DOWN
    down = false;
  }
  if (event.keyCode === 38) { // UP
    up = false;
  }
  if (event.keyCode === 37) { // LEFT
    left = false;
  }
  if (event.keyCode === 39) { // RIGHT
    right = false;
  }
});
                                                           //Try adding in game over function from example 
// Show the start menu
function menu() {
  erase();
  context.fillStyle = '#000000';
  context.font = '36px Arial';
  context.textAlign = 'center';
  context.font = '24px Arial';
  context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);



  context.font = '18px Arial'
  context.fillText('Use the arrow keys to move', canvas.width / 2, (canvas.height / 4) * 2.5);
  // Start the game on a click
  canvas.addEventListener('click', startGame);
}






   //Check for this block of code
   
    async function postData(data = {}, url = "/Project/api/save_score.php") {
        console.log(Object.keys(data).map(function(key) {
            return "" + key + "=" + data[key]; 
        }).join("&"));
        let example = 2;
        if (example === 2) {
            //making XMLHttpRequest awaitable
            //https://stackoverflow.com/a/48969580
            return new Promise(function(resolve, reject) {
                let xhr = new XMLHttpRequest();
                // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.open("POST", url);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onload = function() {
                    if (this.status >= 200 && this.status < 300) {
                        resolve(xhr.response);

                    } else {
                        reject({
                            status: this.status,
                            statusText: xhr.statusText
                        });
                    }
                };
                xhr.onerror = function() {
                    reject({
                        status: this.status,
                        statusText: xhr.statusText
                    });
                };
                xhr.send(Object.keys(data).map(function (key) {
                return "" + key + "=" + data[key]; 
            }).join("&"));
            });

        }
      }

/*
      function fetchRequest() {
        let val = document.getElementsByTagName("input")[0].value;
        fetch(url, {
            method: "POST",
            headers: {
                "Content-type": "application/x-www-form-urlencoded",
            },
            body: `message=${val}`
        }).then(async resp => {
            //uses a promise so we need to await it: https://www.w3schools.com/js/js_promise.asp
            let json = await resp.text(); //can only call this once

            console.log(resp, json);
            document.getElementsByTagName("div")[0].innerText = json;
            // alert(json);
        }).catch(err => {
            alert("Error: " + err);
        })
    }



/*
            function postData(score)
            {
               ("/Project/api/save_score.php").then(data => {
                      console.log(data);
                if (data.status === 200) {
               flash(data.message);
               } else {
             flash(data.message);
                      }
                    })
                  }

*/




    // Start the game
function startGame() {
	// Reduce the countdown timer ever second
  id = setInterval(function() {
    countdown--;
  }, 1000)
  // Stop listening for click events
  canvas.removeEventListener('click', startGame);
  // Put the target at a random starting point
	moveTarget();
  // Kick off the draw loop
  draw();
}





// Show the game over screen
function endGame() {
	// Stop the countdown
  clearInterval(id);
  // Display the final score
  erase();
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'center';
  context.fillText('Final Score: ' + score, canvas.width / 2, canvas.height / 3);
  context.fillText('Your Score Has Been Saved ', canvas.width / 2, canvas.height / 2);
  postData({score:score}, "/Project/api/save_score.php");




}

// Move the target square to a random position
function moveTarget() {
  targetX = Math.round(Math.random() * canvas.width - targetLength);
  targetY = Math.round(Math.random() * canvas.height - targetLength)
}

// Clear the canvas
function erase() {
  context.fillStyle = '#FFFFFF';
  context.fillRect(0, 0, 600, 400);
}

// The main draw loop
function draw() {
  erase();
  // Move the square
  if (down) {
    y += speed;
    targetY += speed / 2;
  }
  if (up) {
    y -= speed;
    targetY -= speed / 2;
  }
  if (right) {
    x += speed;
    targetX += speed / 2;
  }
  if (left) {
    x -= speed;
    targetX -= speed / 2;
  }
 


  // Keep the square within the bounds
  if (y + sideLength > canvas.height) {
    y = canvas.height - sideLength;
  }
  if (y < 0) {
    y = 0;
  }
  if (x < 0) {
    x = 0;
  }
  if (x + sideLength > canvas.width) {
    x = canvas.width - sideLength;
  }


  if (targetY + targetLength > canvas.height) {
    targetY = canvas.height - targetLength;
  }
  if (targetY < 0) {
    targetY = 0;
  }
  if (targetX < 0) {
    targetX = 0;
  }
  if (targetX + targetLength > canvas.width) {
    targetX = canvas.width - targetLength;
  }
  


  // Collide with the target
  if (isWithin(targetX, x, x + sideLength) || isWithin(targetX + targetLength, x, x + sideLength)) { // X
    if (isWithin(targetY, y, y + sideLength) || isWithin(targetY + targetLength, y, y + sideLength)) { // Y
      // Respawn the target
      moveTarget();
      // Increase the score
      score++;
    }
  }
  // Draw the square
  context.fillStyle = '#FF0000';
  context.fillRect(x, y, sideLength, sideLength);
  // Draw the target 
  context.fillStyle = 'rgba(0,255,0,0.04)';
  
  context.fillRect(targetX, targetY, targetLength, targetLength);
  // Draw the score and time remaining
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'left';
  context.fillText('Score: ' + score, 10, 24);
  context.fillText('Time Remaining: ' + countdown, 10, 50);
  // End the game or keep playing
  if (countdown <= 0) {
    endGame();
  } else {
    window.requestAnimationFrame(draw);
  }
}

// Start the game
menu();
canvas.focus();

</script>

</>
