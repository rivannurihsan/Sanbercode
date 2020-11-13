/* 
    Convert This 
    const newFunction = function literal(firstName, lastName){
    return {
        firstName: firstName,
        lastName: lastName,
        fullName: function(){
        console.log(firstName + " " + lastName)
        return 
        }
    }
    }
    
    //Driver Code 
    newFunction("William", "Imoh").fullName() 
*/
/* To This */

const newFunction = function literal(firstName, lastName){
    return {
        firstName,
        lastName,
        fullName: function(){
            console.log(firstName + " " + lastName)
            return 
        }
    }
}

newFunction("William", "Imoh").fullName() 