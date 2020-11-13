/* Convert This

    const newObject = {
        firstName: "Harry",
        lastName: "Potter Holt",
        destination: "Hogwarts React Conf",
        occupation: "Deve-wizard Avocado",
        spell: "Vimulus Renderus!!!"
    }

*/
/* To This */

const newObject = {
    firstName: "Harry",
    lastName: "Potter Holt",
    destination: "Hogwarts React Conf",
    occupation: "Deve-wizard Avocado",
    spell: "Vimulus Renderus!!!"
}

const { firstName, lastName, destination, occupation, spell} = newObject

console.log(firstName, lastName, destination, occupation, spell)