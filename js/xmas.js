
        // Check the value of the xmas variable
        var xmas = "on"; // Change this value as needed
    
        // Get the element to be toggled
        var lightropeList = document.querySelector('.lightrope');
        var xmasjumbotron = document.querySelector('#xmasjumbotron')
        // Toggle the visibility based on the xmas variable
        if (xmas === "on") {
          lightropeList.style.display = 'block'; // Show the element
          xmasjumbotron.style.display = "block";
        } else {
          lightropeList.style.display = 'none'; // Hide the element
          xmasjumbotron.style.display = 'none';
        }
