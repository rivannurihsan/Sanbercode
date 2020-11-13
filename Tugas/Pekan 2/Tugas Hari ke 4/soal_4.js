/*
    CONVERT THIS
        const west = ["Will", "Chris", "Sam", "Holly"]
        const east = ["Gill", "Brian", "Noel", "Maggie"]
        const combined = west.concat(east)
        //Driver Code
        console.log(combined)

*/ 
/*TO THIS*/ 

const west = ["Will", "Chris", "Sam", "Holly"]
const east = ["Gill", "Brian", "Noel", "Maggie"]
const combined = [ ...west, ...east];
//Driver Code
console.log(combined)