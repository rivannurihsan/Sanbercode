/*
    const planet = "earth" const view = "glass" var before = 'Lorem ' + view + 'dolor sit amet, ' +       'consectetur adipiscing elit,' + planet + 'do eiusmod tempor ' +     'incididunt ut labore et dolore magna aliqua. Ut enim' +     ' ad minim veniam'  
    // Driver Code 
    console.log(before) 


*/ 
/*TO THIS*/ 

const view = "glass";
var before = 'Lorem ';
const planet =
`
    earth const view = ${view}  var before = ${before} ${view} dolor sit amet, consectetur adipiscing elit, planet do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
`;

  console.log(planet)